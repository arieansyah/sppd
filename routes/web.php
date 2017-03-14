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
    return view('base');
});

Route::get('surat', 'SuratController@index');
Route::get('surat/create', 'SuratController@create');
Route::post('surat/', 'SuratController@store');
Route::get('surat/{id}/edit', 'SuratController@edit');
Route::get('surat/{id}','SuratController@show');
Route::patch('surat/{id}', 'SuratController@update');
Route::delete('surat/{id}', 'SuratController@destroy');

Route::get('pegawai', 'PegawaiController@index');
Route::get('pegawai/create', 'PegawaiController@create');
Route::post('pegawai/', 'PegawaiController@store');
Route::get('pegawai/{id}/edit', 'PegawaiController@edit');
Route::get('pegawai/{id}','PegawaiController@show');
Route::patch('pegawai/{id}', 'PegawaiController@update');
Route::delete('pegawai/{id}', 'PegawaiController@destroy');

Route::get('cetak', 'CetakController@index');
Route::get('cetak/pdf/{id}',array('as'=>'cetak/pdf','uses'=>'CetakController@getPdf'));