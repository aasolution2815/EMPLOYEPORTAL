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


Route::get('SuperAdmin/inputs', 'SuperAdmin\SuperAdminController@inputs')->name('SuperAdmin/inputs');

Route::get('SuperAdmin/add_client', 'SuperAdmin\SuperAdminController@add_client')->name('SuperAdmin/add_client');

Route::get('SuperAdmin/module_assign', 'SuperAdmin\SuperAdminController@module_assign')->name('SuperAdmin/module_assign');
/** Super Admin Url End Here */

Route::get('SuperAdmin/show_table', 'SuperAdmin\SuperAdminController@show_table')->name('SuperAdmin/show_table');

Route::get('SuperAdmin/module_creation', 'SuperAdmin\SuperAdminController@module_creation')->name('SuperAdmin/module_creation');

Route::get('students/list', 'StudentController@getStudents')->name('students.list');
// Route::get('students/list', [StudentController::class, 'getStudents'])->name('students.list');


