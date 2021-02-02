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

Route::get('/', function () {
    return view('Dashboard/dashboard');
});
route::get('/Dashboard','DashboardController@index')->name('home');
Route::resource('anggota', 'AnggotaController');
Route::resource('iuran', 'IuranController');
Route::resource('agenda', 'AgendaController');
Route::resource('user', 'UserController');
