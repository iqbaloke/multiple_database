<?php

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

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('navbar.Home');
// });

Route::get('/','LoginController@login')->name('login');
Route::post('/postlogin','LoginController@postlogin');
Route::get('/logout','LoginController@logout');
//autentikasi login
Route::group(['middleware' => ['auth','ChekRole:admin']], function () {
    Route::get('/karyawan','KaryawanController@karyawan');
    Route::get('/after-insert','UsersController@index');

    Route::get('detail/{ID}','KaryawanController@detail');
    Route::get('/home','KaryawanController@home');
    // Route::get('/after-insert', function () {
    //     return view('navbar.after-insert');
    // });
    
    Route::get('/after-update', function () {
        return view('navbar.after-update');
    });
    Route::get('/after-delete', function () {
        return view('navbar.after-delete');
    });
 
    Route::get('/tabel', function () {
        return view('navbar.tabel');
    });
    
});

Route::group(['middleware' => ['auth','ChekRole:admin,user']], function () {
    Route::get('/home','KaryawanController@home');
});