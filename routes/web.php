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
/** Super Admin Url End Here */


Route::get('students/list', 'StudentController@getStudents')->name('students.list');
// Route::get('students/list', [StudentController::class, 'getStudents'])->name('students.list');


