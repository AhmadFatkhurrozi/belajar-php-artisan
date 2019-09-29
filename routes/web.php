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
    return view('welcome');
});

// EXP
// route blog
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');


//route CRUD
Route::get('/pegawai','CrudController@index');
Route::get('/pegawai/tambah','CrudController@tambah');
Route::post('/pegawai/store','CrudController@store');
Route::get('/pegawai/edit/{id}','CrudController@edit');
Route::post('/pegawai/update','CrudController@update');
Route::get('/pegawai/hapus/{id}','CrudController@hapus');
Route::get('/pegawai/cari','CrudController@cari');

//Validasi
Route::get('/input', 'ValidasiController@input');
Route::post('/proses', 'ValidasiController@proses');