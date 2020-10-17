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




/** Super Admin Url Start Here */

//SuperadminDashboard Url
Route::get('SuperAdmin/dashboard', 'SuperAdmin\SuperAdminController@showDashboard')->name('SuperAdmin/dashboard');

//Superadmin Client Creation  Url
Route::get('SuperAdmin/client-creation', 'SuperAdmin\SuperAdminController@showClientCreation')->name('SuperAdmin/client-creation');

/** Super Admin Url End Here */


