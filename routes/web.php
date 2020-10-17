<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Default Browser
Route::get('/', 'AuthenticationController@LoginScreen')->name('login');

//Authentication Url
Route::post('/checklogin', 'AuthenticationController@CheckLogin')->name('/checklogin');


/** Super Admin Url Start Here */

//SuperadminDashboard Url
Route::get('SuperAdmin/dashboard', 'SuperAdmin\SuperAdminController@showDashboard')->name('SuperAdmin/dashboard');

//Superadmin Client Creation  Url
Route::get('SuperAdmin/client-creation', 'SuperAdmin\SuperAdminController@showClientCreation')->name('SuperAdmin/client-creation');

//Superadmin Client Creation  Url
Route::post('SuperAdmin/save-client-creation', 'SuperAdmin\SuperAdminController@saveClientCreation')->name('SuperAdmin/client-creation');



/** Super Admin Url End Here */

/** Common Controller Start Here */
Route::post('/getvaild-email', 'CommonController@getVaildEmailId')->name('/getvaild-email');
/** Common Controller End Here */

