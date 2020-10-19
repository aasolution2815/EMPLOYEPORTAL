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


    }
}
