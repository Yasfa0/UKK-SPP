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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('adminMiddleware');


//Untuk Admin

//Route Kelas
Route::get('/read-kelas', 'KelasController@read');
Route::get('/create-kelas','KelasController@create');
Route::post('/create-kelas-process','KelasController@createProcess');
Route::get('/edit-kelas/{id}','KelasController@edit');
Route::post('/edit-kelas-process','KelasController@editProcess');
Route::get('/delete-kelas/{id}','KelasController@delete');

//Route Siswa
Route::get('/read-siswa','SiswaController@read');
Route::get('/create-siswa', 'SiswaController@create');
Route::post('/create-siswa-process','SiswaController@createProcess');
Route::get('/edit-siswa/{id}','SiswaController@edit');
Route::post('/edit-siswa-process','SiswaController@editProcess');
Route::get('/delete-siswa/{id}','SiswaController@delete');
Route::get('/activate-siswa/{id}','SiswaController@activate');


//Route Petugas
Route::get('/home-petugas','HomeController@homePetugas');
Route::get('/read-petugas','PetugasController@read');
Route::get('/edit-petugas/{id}','PetugasController@edit');
Route::post('/edit-petugas-process','PetugasController@editProcess');
Route::get('/delete-petugas/{id}','PetugasController@delete');

//Route SPP
Route::get('/create-spp','SPPController@create');
Route::post('/create-spp-process','SPPController@createProcess');
Route::get('/read-spp/{id}','SPPController@read');
Route::get('/edit-spp/{id}','SPPController@edit');
Route::post('/edit-spp-process/','SPPController@editProcess');
Route::get('/delete-spp/{id}','SPPController@delete');
Route::get('/riwayat-spp-petugas/{id}','SPPController@riwayatPetugas');

//Route Laporan
Route::get('/generate-laporan','LaporanController@index');
Route::get('/generate-laporan-spp','LaporanController@cetakSPP');
Route::get('/generate-laporan-siswa','LaporanController@cetakSiswa');
Route::get('/generate-laporan-petugas','LaporanController@cetakPetugas');
Route::get('/generate-laporan-admin','LaporanController@cetakAdmin');


//Untuk User
Route::get('/home-user','UserController@home');
Route::get('/profile-siswa/{id}','UserController@profile');
Route::post('/profile-siswa-process/','UserController@profileProcess');
Route::get('/riwayat-siswa/{id}','UserController@riwayat');