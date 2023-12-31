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

use App\Http\Controllers\NilaiMahasiswaPerkuliahanController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Pengurus
Route::prefix('pengurus')->middleware('role:pengurus')->group(function() {
    Route::get('/surat-ttd', 'PengurusController@validasiSuratTtd')->name('pengurus_surat_ttd');
    //Pengurus Bagian Program
    Route::get('/input-program', 'PengurusController@index')->name('indexProgram');
    Route::get('/create-program', 'PengurusController@createProgram')->name('createProgram');
    Route::get('/edit-program/{id}', 'PengurusController@editProgram')->name('editProgram');
    Route::post('/input-program', 'PengurusController@saveProgram')->name('saveProgram');
    Route::post('/update-program', 'PengurusController@updateProgram')->name('updateProgram');
    Route::get('/delete-program/{id}', 'PengurusController@deleteProgram')->name('deleteProgram');
    Route::get('/surat-pengakuan', 'PengurusController@validasiSuratpengakuan')->name('pengurus_surat_pengakuan');
    //pengurus Bagian Nilai Perkuliahan Mahasiswa
    Route::get('/index-nilai', 'NilaiMahasiswaPerkuliahanController@indexNilai')->name('indexNilai');
    Route::get('/input-nilai/{id}', 'NilaiMahasiswaPerkuliahanController@inputNilai')->name('inputNilai');
    Route::post('/simpan-nilai', 'NilaiMahasiswaPerkuliahanController@simpanNilai')->name('simpanNilai');
    Route::get('/edit-nilai/{id}', 'NilaiMahasiswaPerkuliahanController@editNilai')->name('editNilai');
    Route::post('/update-nilai', 'NilaiMahasiswaPerkuliahanController@updateNilai')->name('updateNilai');
    Route::get('nilai/detail/{id}', 'NilaiMahasiswaPerkuliahanController@detailNilai')->name('detailNilai');
    Route::get('/konversi-nilai-matkul/{id}', 'NilaiMahasiswaPerkuliahanController@konversiNilaiMatkul')->name('konversiNilaiMatkul');
    Route::get('/konversi-nilai', 'NilaiMahasiswaPerkuliahanController@indexKonversi')->name('indexKonversi');
    Route::post('/nilai-konversi', 'NilaiMahasiswaPerkuliahanController@nilaiKonversi')->name('nilaiKonversi');
    //Route::get('/upload-nilai-perkuliahan/edit/{id}', 'PengurusController@editNilai')->name('editNilai');
    //Route::get('/upload-nilai-perkuliahan', 'PengurusController@saveNilai')->name('saveNilai');
});

// Prodi
Route::prefix('prodi')->middleware('role:prodi')->group(function() {
    Route::get('/validasi', 'ProdiController@validasiPendaftaran')->name('prodi_pendaftaran');
    Route::get('/input-matkul', 'ProdiController@inputMatkul')->name('prodi_input_matkul');
    Route::get('/input-matkul/index', 'ProdiController@indexMatkul')->name('prodi.inputmatkul.index');
});

//mahasiswa
Route::prefix('mahasiswa')->middleware('role:mahasiswa')->group(function() {
    Route::get('/form-pendaftaran', 'MahasiswaController@formPendaftaran')->name('form_pendaftaran');
    Route::get('/surat-pengakuan-sks', 'MahasiswaController@suratPengakuanSKS')->name('surat_pengakuan_sks');
    Route::get('/laporan-akhir-dan-nilai-total', 'MahasiswaController@la_dan_nt')->name('laporan_akhir_dan_nilai_total');
    Route::post('/simpan-pendaftaran', 'MahasiswaController@simpanPendaftaran')->name('simpan_pendaftaran');
    Route::get('/pengumuman-pendaftaran', 'MahasiswaController@pengumumanPendaftaran')->name('pengumuman_pendaftaran');
    Route::get('/cetaksuratrekomendasi', 'MahasiswaController@cetaksuratrekomendasi')->name('cetaksuratrekomendasi');
    Route::get('/cetaksptjm', 'MahasiswaController@cetaksptjm')->name('cetaksptjm');
    Route::get('/dashboard-mahasiswa', 'MahasiswaController@dashboard')->name('dashboard_mahasiswa');
    //kodingan lu masukin disini
    Route::post('/update-sptjm', 'MahasiswaController@updateSPTJM')->name('updateSPTJM');
});

Route::get('/laporan-akhir-dan-nilai-total', 'NilaiMahasiswaMbkmController@inputLaporanAkhirDanNilaiTotal')->name('laporan_akhir_dan_nilai_total');
Route::post('/simpan-laporan-akhir-dan-nilai-total', 'NilaiMahasiswaMbkmController@simpanLaporanAkhirdanNilaiTotal')->name('simpan_laporan_akhir_dan_nilai_total');
