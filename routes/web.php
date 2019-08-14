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

Route::get('/admin/login', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');

//Data Seksi
Route::get('/dataseksi','SeksiController@index')->name('seksi');
Route::get('/dataseksi/tambah','SeksiController@indexx');
Route::post('/dataseksi/tambah/simpan','SeksiController@store');
Route::get('/dataseksi/{id}','SeksiController@destroy');
Route::get('/dataseksi/edit/{id}','SeksiController@edit');
Route::post('/dataseksi/update/{id}','SeksiController@update');