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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/login',                    'Auth\LoginController@showLoginForm');
Route::get('/dashboard',                'DashboardController@showDashboard');
Route::get('/agenda',                   'AgendaController@showAgenda');
Route::get('/buat-form-jln',            'JLNController@showJLN');
Route::get('/preview-form-jln',         'JLNController@showPreviewJLN');
Route::get('/form-jln-saya',            'JLNController@showMyJLN');
Route::get('/buat-surtug-personal',     'SurtugController@showSurtugPersonal');
Route::get('/preview-surtug-personal',  'SurtugController@showPreviewSurtugPersonal');
Route::get('/buat-surtug-grup',         'SurtugController@showSurtugGrup');
Route::get('/preview-surtug-grup',      'SurtugController@showPreviewSurtugGrup');
Route::get('/buat-spd',                 'SPDController@showSPD');
Route::get('/preview-spd',              'SPDController@showPreviewSPD');
Route::get('/arsip-saya',               'ArsipController@showArsip');
Route::get('/approve-form-jln',         'KPAController@showHalamanKPA');
Route::get('/buat-laporan',             'LaporanController@showBuatLaporan');

Route::get('/home', 'HomeController@index')->name('home');
