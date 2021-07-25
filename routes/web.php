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
Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});
Route::get('blog', function () {
	return view('blog');
});

Route::get('dosen', 'DosenController@index');
	
// Route::get('/pegawai/{nama}', 'PegawaiController@index');
Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');

Route::get('/blog/home', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');



//crud
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::post('/pegawai/store','PegawaiController@store');	
Route::post('/pegawai/update','PegawaiController@update');

//validasi
Route::get('/input', 'MalasngodingController@input');

Route::post('/proses', 'MalasngodingController@proses');