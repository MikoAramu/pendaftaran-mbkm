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
Route::get('/pengurus-surat-ttd', 'PengurusController@validasiSuratTtd')->name('pengurus_surat_ttd');
Route::get('/pengurus-input-program', 'PengurusController@inputProgram')->name('pengurus_input_program');
Route::get('/pengurus-surat-pengakuan', 'PengurusController@validasiSuratpengakuan')->name('pengurus_surat_pengakuan');
Route::get('/pengurus-upload-nilai-perkuliahan', 'PengurusController@uploadNilaiPerkuliahan')->name('pengurus_upload_nilai_perkuliahan');
Route::get('/pengurus-upload-nilai-perkuliahan/index', 'PengurusController@indexNilai')->name('pengurus.uploadnilai.index');

//Prodi
Route::get('/prodi-validasi', 'ProdiController@validasiPendaftaran')->name('prodi_pendaftaran');
Route::get('/prodi-input-matkul', 'ProdiController@inputMatkul')->name('prodi_input_matkul');
Route::get('/prodi-input-matkul/index', 'ProdiController@indexMatkul')->name('prodi.inputmatkul.index');

//mahasiswa
Route::get('/form-pendaftaran', 'MahasiswaController@formPendaftaran')->name('form_pendaftaran');
Route::get('/surat-pengakuan-sks', 'MahasiswaController@suratPengakuanSKS')->name('surat_pengakuan_sks');
Route::get('/laporan-akhir-dan-nilai-total', 'MahasiswaController@la_dan_nt')->name('laporan_akhir_dan_nilai_total');
Route::post('/simpan-pendaftaran', 'MahasiswaController@simpanPendaftaran')->name('simpan_pendaftaran');
Route::get('/pengumuman-pendaftaran', 'MahasiswaController@pengumumanPendaftaran')->name('pengumuman_pendaftaran');
Route::get('/cetaksuratrekomendasi', 'MahasiswaController@cetaksuratrekomendasi')->name('cetaksuratrekomendasi');
Route::get('/cetaksptjm', 'MahasiswaController@cetaksptjm')->name('cetaksptjm');
Route::get('/dashboard-mahasiswa', 'MahasiswaController@dashboard')->name('dashboard_mahasiswa');

Route::post('/update-sptjm', 'MahasiswaController@updateSPTJM')->name('updateSPTJM');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
