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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Pengurus
Route::get('/pengurus-validasi', 'PengurusController@validasiPendaftaran')->name('pengurus_pendaftaran');
Route::get('/pengurus-surat-ttd', 'PengurusController@validasiSuratTtd')->name('pengurus_surat_ttd');
Route::get('/pengurus-upload-nilai-perkuliahan', 'PengurusController@uploadNilaiPerkuliahan')->name('pengurus_upload_nilai_perkuliahan');
Route::get('/pengurus-input-matkul', 'PengurusController@inputMatkul')->name('pengurus_input_matkul'); 

//Prodi
Route::get('/prodi-validasi', 'ProdiController@validasiPendaftaran')->name('prodi_pendaftaran');

//mahasiswa
Route::get('/form-pendaftaran', 'MahasiswaController@formPendaftaran')->name('form_pendaftaran');
Route::get('/pengumuman-pendaftaran', 'MahasiswaController@pengumumanPendaftaran')->name('pengumuman_pendaftaran');