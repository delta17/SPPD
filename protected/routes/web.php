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

Route::get('/login',                    'Auth\LoginController@showLoginForm')->middleware('guest');
Route::get('/dashboard',                'DashboardController@showDashboard')->middleware('auth');
Route::get('/agenda',                   'AgendaController@showAgenda')->middleware('auth');
Route::get('/buat-form-jln',            'JLNController@showJLN')->middleware('auth');
Route::post('/upload-form-jln',         'JLNController@inputJLN')->middleware('auth');
Route::get('/preview-form-jln',         'JLNController@showPreviewJLN')->middleware('auth');
Route::get('/form-jln-saya',            'JLNController@showMyJLN')->middleware('auth');
Route::get('/buat-surtug-personal',     'SurtugController@showSurtugPersonal')->middleware('auth');
Route::get('/preview-surtug-personal',  'SurtugController@showPreviewSurtugPersonal')->middleware('auth');
Route::get('/buat-surtug-grup',         'SurtugController@showSurtugGrup')->middleware('auth');
Route::get('/preview-surtug-grup',      'SurtugController@showPreviewSurtugGrup')->middleware('auth');
Route::get('/buat-spd',                 'SPDController@showSPD')->middleware('auth');
Route::get('/preview-spd',              'SPDController@showPreviewSPD')->middleware('auth');
Route::get('/arsip-saya',               'ArsipController@showArsip')->middleware('auth');
Route::get('/approval-form-jln',        'JLNController@showApprovalJLN')->middleware('auth');
Route::get('/approve-form-jln/{id}',    'JLNController@showDetailJLN')->middleware('auth');
Route::post('/approval',                'JLNController@inputApprovalJLN')->middleware('auth');
Route::get('/buat-laporan',             'LaporanController@showBuatLaporan');


//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
