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
        return view('SuperAdmin.inputs');
        // return view('SuperAdmin.superadmin-dashboard');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function inputs()
    {
        return view('SuperAdmin.inputs');
    }

    public function add_client()
    {
        return view('SuperAdmin.add_client');
    }

    public function show_table()
    {
        return view('SuperAdmin.show_table');
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
