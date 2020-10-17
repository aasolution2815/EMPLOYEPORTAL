<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Model\EmsModel;
use Illuminate\Support\Facades\Session;

class SuperAdminController extends Controller
{
    /**
     * Display a  View Page  Dashboard.
     *
     * @return \Illuminate\Http\Response It Will Return The View Page
     */
    public function showDashboard()
    {
        return view('SuperAdmin.superadmin-dashboard');
    }

    /**
     * Display a View Page For Client Creation.
     *
     * @return \Illuminate\Http\Response It Will Return The View Page
     */
    public function showClientCreation()
    {
        return view('SuperAdmin.client-creation');
    }

    /**
     * This is For The Save The Client And Into Database
     *
     * @param  \Illuminate\Http\Request  $request it Contatin Client Details.
     * @return \Illuminate\Http\Response It Will Return Wethere Client Already  exit Or
     *  Not if Not Then Add it
     */
    public function saveClientCreation(Request $request)
    {
        $emsmodel = new EmsModel();
        $company_name = $request->company_name;
        $admin_name = $request->admin_name;
        $admin_emailid = $request->admin_emailid;
        $user_password = $request->user_password;
        $empcode_format = $request->empcode_format;
        $client_prefix = $request->client_prefix;
        $contatct_info = $request->contatct_info;
        $user_lmit = $request->user_lmit;
        $no_of_days = $request->no_of_days;
        $expiry_date = $request->expiry_date;
        $getSessionDatabseName = Session::get('DATABASENAME');
        $timestamp = date('Y-m-d H:i:s');
        $todayDate = date('Y-m-d');
        if ($no_of_days == 'Days') {
            $finaldate = date('Y-m-d', strtotime($todayDate . ' + ' . $expiry_date . ' days'));
        } else if ($no_of_days == 'Month') {
            $time = strtotime($todayDate);
            $finaldate = date("Y-m-d", strtotime("+".$expiry_date." month", $time));
           // $finaldate = date('Y-m-d', strtotime('+3 month', $todayDate));
        } else {
            $finaldate = date('Y-m-d', strtotime('+'.$expiry_date.' years'));
        }
        $encryptDate = Crypt::encrypt($finaldate);
        $encrypt_password = Crypt::encrypt($user_password);
        $data['COMPANYNAME'] = $company_name;
        $data['ADMINNAME'] = $admin_name;
        $data['ADMINMOB_NO'] = $contatct_info;
        $data['ADMINEMAILID'] = $admin_emailid;
        $data['CLIENTPREFIX'] = $client_prefix;
        $data['PASSWORDS'] = $encrypt_password;
        $data['EMP_CODE'] = $empcode_format;
        $data['AUTHENTICATION'] = $encryptDate;
        $data['USER_LIMITS'] = $user_lmit;
        $data['CREATED_AT'] = $timestamp;
        $data['DATABASENAME'] = $getSessionDatabseName;
        $response = $emsmodel->saveClient($data);
        return $response;
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
