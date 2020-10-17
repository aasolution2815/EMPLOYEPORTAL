<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CommonController extends Controller
{
    /**
     * It Will Check Email Ready Exits Or Not
     *
     * @param  \Illuminate\Http\Request  $request It Is a Email Id That To be Cheked
     * @return \Illuminate\Http\Response It Will return true If Email is Valid.
     */
    public function getVaildEmailId(Request $request)
    {
        $ROLEID = Session::get('RoleId');
        $getSessionDatabseName = Session::get('DATABASENAME');
        $emailId = $request->emailId;
        if ($ROLEID == 1) {
            $databasename = $getSessionDatabseName;
            Config::set('database.connections.dynamicsql.database', $databasename);
            Config::set('database.default', 'dynamicsql');
            /** Check Wether Email Id Is Prsent In The Login Table
             * If Its Count Is Greter Then 1 Then Email Is InValid  else Email Is  Valid.
             */
            $loginCredentailDetails = DB::table('sup_tbl_login_credential')
                ->where(['EMAILID' => $emailId])->get();
                if (count($loginCredentailDetails) == 0) {
                    // return 'TRUE';
                    $sup_client = DB::table('sup_tbl_all_client')
                    ->where(['ADMINEMAILID' => $emailId])->get();
                    if (count($sup_client) == 0) {
                        return 'TRUE';
                    } else {
                        return 'FALSE';
                    }
                } else {
                    return 'FALSE';
                }

        } else {
            Config::set('database.connections.dynamicsql.database', $getSessionDatabseName);
            Config::set('database.default', 'dynamicsql');
            return $getSessionDatabseName;
        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
