<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class EmsModel extends Model
{

    /**
     * This Function is to Save the Details
     * and Send Response
     * @param $data \Illuminate\Http\Request  $data will Have All Data To insert.
     * @param $tablename \Illuminate\Http\Request  $tablename Tabel Name.
     * @return \Illuminate\Http\Response Return The Id Of The Record Inserted.
     */
    public function insertRecords($data, $tablename)
    {
        // echo "Connected sucessfully to database ".DB::connection()->getDatabaseName().".";
        // DB::enableQuerylog();
        $insert = DB::table($tablename)->insertGetId($data);
        // $aa= DB::getQuerylog();
        // print_r($aa);exit;
        return $insert;
    }

    /**
     * Authtentication It Is For The Authentication Purpose
     *
     * @param  mixed $username Username By Which Authentication Need To Be Done
     * @param  mixed $userPasword Password By Which Authentication Will be Done
     * @return $return It Will Return that wether user is Valid Or Not
     */
    public function Authtentication($username, $userPasword)
    {
        try {
            $loginCredentailDetails = DB::table('sup_tbl_login_credential')
            // ->where(['USERNAME' => $username])
                ->where(['EMAILID' => $username])->get();
            $returnmessage = '';
            if (count($loginCredentailDetails) > 0) {
                $RoleId = $loginCredentailDetails[0]->ROLEID;
                $USERID = $loginCredentailDetails[0]->USERID;
                $CLIENTID = $loginCredentailDetails[0]->CLIENTID;
                $USERNAME = $loginCredentailDetails[0]->USERNAME;
                $EMAILID = $loginCredentailDetails[0]->EMAILID;
                if ($RoleId == 1) {
                    $Password = $loginCredentailDetails[0]->USERPASSWORD;
                    $databasename = Config::get('database.connections.' . Config::get('database.default'));
                    $getDecryptPassword = Crypt::decrypt($Password);
                    if ($userPasword == $getDecryptPassword) {
                        $USERPASSWORD = $loginCredentailDetails[0]->USERPASSWORD;
                        Session::put('RoleId', $RoleId);
                        Session::put('USERID', $USERID);
                        Session::put('CLIENTID', $CLIENTID);
                        Session::put('USERNAME', $USERNAME);
                        Session::put('EMAILID', $EMAILID);
                        Session::put('DATABASENAME', $databasename['database']);
                        $returnmessage = $RoleId;
                    } else {
                        $returnmessage = 'NotMatch';
                    }
                } else if ($RoleId == 2) {
                    $returnmessage = $RoleId;
                } else {
                    $returnmessage = $RoleId;
                }

            } else {
                $returnmessage = 'NotFound';
            }
            return $returnmessage;
        } catch (\Exception $e) {
            $Errors = $e->getMessage();
            return 'Error';
        }

    }

    /**
     * saveClient . This Function Will Save The Client Details In To
     * sup_tbl_client, login_credentail, mst_tbl_user,company_info table.
     * and Create The Database Related To Its Prefix
     * @param  mixed $data It Is Havling Client Datas
     * @return void It Will Return The The Message That Client Is Creted
     */
    public function saveClient($data)
    {
        try {
            $company_name = $data['COMPANYNAME'];
            $admin_name = $data['ADMINNAME'];
            $contatct_info = $data['ADMINMOB_NO'];
            $admin_emailid = $data['ADMINEMAILID'];
            $client_prefix = $data['CLIENTPREFIX'];
            $encrypt_password = $data['PASSWORDS'];
            $empcode_format = $data['EMP_CODE'];
            $encryptDate = $data['AUTHENTICATION'];
            $user_lmit = $data['USER_LIMITS'];
            $timestamp = $data['CREATED_AT'];
            $databsename = $client_prefix . '_management';
            $originalDB = $data['DATABASENAME'];
            $responsemessage = '';

            $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME =  ?";
            $db = DB::select($query, [$databsename]);
            if (empty($db)) {
                /** Check Wether Email Id Is Prsent In The Login Table
                 * If Its Count Is Greter Then 1 Then Email Is InValid  else Email Is  Valid.
                 */
                $loginCredentailDetails = DB::table('sup_tbl_login_credential')
                    ->where(['EMAILID' => $admin_emailid])->get();
                if (count($loginCredentailDetails) == 0) {
                    $sup_client = DB::table('sup_tbl_all_client')
                        ->where(['ADMINEMAILID' => $admin_emailid])->get();
                    if (count($sup_client) == 0) {
                        $checkClientprefix = DB::table('sup_tbl_all_client')->where(['CLIENTPREFIX' => $client_prefix])->get()->count();
                        if ($checkClientprefix == 0) {

                            try {
                                /** Save Records In sup_tbl_all_clients */
                                $SUPDETAILS['COMPANYNAME'] = $company_name;
                                $SUPDETAILS['ADMINNAME'] = $admin_name;
                                $SUPDETAILS['ADMINMOBILENO'] = $contatct_info;
                                $SUPDETAILS['ADMINEMAILID'] = $admin_emailid;
                                $SUPDETAILS['CLIENTPREFIX'] = $client_prefix;
                                $SUPDETAILS['PASSWORDS'] = $encrypt_password;
                                $SUPDETAILS['EMPCODE'] = $empcode_format;
                                $SUPDETAILS['AUTHENTICATION'] = $encryptDate;
                                $SUPDETAILS['CREATED_AT'] = $timestamp;
                                $SUPDETAILS['USERLIMITS'] = $user_lmit;
                                $CLIENTID = $this->insertRecords($SUPDETAILS, 'sup_tbl_all_client');
                                /** Save Records In sup_tbl_login_credential*/
                                $LOGINCREDENTIALS['CLIENTID'] = $CLIENTID;
                                $LOGINCREDENTIALS['EMAILID'] = $admin_emailid;
                                $LOGINCREDENTIALS['ROLEID'] = '2';
                                $LOGINCREDENTIALS['CREATEDAT'] = $timestamp;
                                $LOGINCREDENTIALS['AUTHENTICATION'] = $encryptDate;
                                $userId = $this->insertRecords($LOGINCREDENTIALS, 'sup_tbl_login_credential');
                                try {
                                    DB::statement('Create database ' . $databsename);
                                    $tables = DB::select("SELECT  table_name FROM information_schema.tables WHERE table_schema = '$originalDB' and TABLE_NAME NOT LIKE 'sup_%' ORDER BY table_name");
                                    $i = 0;
                                    foreach ($tables as $key => $value) {
                                        $aaryofDetails[$key] = $value;
                                        $tablesname = $aaryofDetails[$i]->table_name;
                                        DB::statement('Create Table ' . $databsename . '.' . $tablesname . ' Like ' . $originalDB . '.' . $tablesname);
                                        $i++;
                                    }
                                    try {
                                        /** Save Records In The mst_tbl_users */
                                        $USERDETAILS['FULLNAME'] = $admin_name;
                                        $USERDETAILS['MOBLIENO'] = $contatct_info;
                                        $USERDETAILS['EMAILID'] = $admin_emailid;
                                        $USERDETAILS['PASSWORDS'] = $encrypt_password;
                                        $USERDETAILS['EMPCODE'] = $empcode_format;
                                        $USERDETAILS['CREATED_AT'] = $timestamp;
                                        $USERDETAILS['ROLEID'] = '2';
                                        DB::disconnect('mysql');
                                        Config::set('database.connections.mysql.database', $databsename);
                                        $userId = $this->insertRecords($USERDETAILS, 'mst_tbl_users');
                                        /** Save Records In The mst_tbl_company_information */
                                        $COMPONYINFO['COMPANYNAME'] = $company_name;
                                        $COMPANYID = $this->insertRecords($COMPONYINFO, 'mst_tbl_company_information');
                                        if ($COMPANYID > 0) {
                                            Config::set('database.connections.mysql.database', $originalDB);
                                            Config::set('database.default', 'mysql');
                                            $responsemessage = 'DONE';
                                        }

                                    } catch (\Exception $e) {
                                        $Errors = $e->getMessage();
                                        $responsemessage = 'Error';
                                    }
                                } catch (\Exception $e) {
                                    $Errors = $e->getMessage();
                                    $responsemessage = 'ErrorInDB';
                                }
                            } catch (\Exception $e) {
                                $Errors = $e->getMessage();
                                $responsemessage = 'Error';
                            }
                        } else {
                            $responsemessage = 'DBPRESENT';
                        }
                    } else {
                        $responsemessage = 'EMAILPRESENT';
                    }
                } else {
                    $responsemessage = 'EMAILPRESENT';
                }
            } else {
                $responsemessage = 'DBPRESENT';
            }
            return $responsemessage;
        } catch (\Exception $e) {
            $Errors = $e->getMessage();
            return 'Error';
        }

    }
}
