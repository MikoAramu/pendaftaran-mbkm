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

// Pengurus
Route::prefix('pengurus')->middleware('role:pengurus')->group(function() {
    Route::get('/surat-ttd', 'PengurusController@validasiSuratTtd')->name('pengurus_surat_ttd');
    Route::get('/input-program', 'PengurusController@inputProgram')->name('pengurus_input_program');
    Route::get('/surat-pengakuan', 'PengurusController@validasiSuratpengakuan')->name('pengurus_surat_pengakuan');
    Route::get('/upload-nilai-perkuliahan', 'PengurusController@uploadNilaiPerkuliahan')->name('pengurus_upload_nilai_perkuliahan');
    Route::get('/upload-nilai-perkuliahan/index', 'PengurusController@indexNilai')->name('pengurus.uploadnilai.index');
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
    Route::get('/pengumuman-surat-pengakuan-sks', 'MahasiswaController@pengumumanSuratPengakuanSKS')->name('pengumuman_surat_pengakuan_sks');
    Route::get('/laporan-akhir-dan-nilai-total', 'MahasiswaController@la_dan_nt')->name('laporan_akhir_dan_nilai_total');
    Route::post('/simpan-pendaftaran', 'MahasiswaController@simpanPendaftaran')->name('simpan_pendaftaran');
    Route::get('/pengumuman-pendaftaran', 'MahasiswaController@pengumumanPendaftaran')->name('pengumuman_pendaftaran');
    Route::get('/cetaksuratrekomendasi', 'MahasiswaController@cetaksuratrekomendasi')->name('cetaksuratrekomendasi');
    Route::get('/cetaksptjm', 'MahasiswaController@cetaksptjm')->name('cetaksptjm');
    Route::get('/cetaksuratsks', 'MahasiswaController@cetaksuratsks')->name('cetaksuratsks');
    Route::get('/dashboard-mahasiswa', 'MahasiswaController@dashboardMahasiswa')->name('dashboard_mahasiswa');
    Route::get('/petunjuk-penggunaan', 'MahasiswaController@petunjukPenggunaan')->name('petunjuk_penggunaan');
    Route::post('/update-sptjm', 'MahasiswaController@updateSPTJM')->name('updateSPTJM');
    Route::get('/laporan-akhir-dan-nilai-total', 'NilaiMahasiswaMbkmController@inputLaporanAkhirDanNilaiTotal')->name('laporan_akhir_dan_nilai_total');
    Route::post('/simpan-laporan-akhir-dan-nilai-total', 'NilaiMahasiswaMbkmController@simpanLaporanAkhirdanNilaiTotal')->name('simpan_laporan_akhir_dan_nilai_total');

    Route::post('/update-mitra-bidang', 'MahasiswaController@updateMitraBidang')->name('update_mitra_bidang');
    Route::post('/update-surat-pengakuan-sks', 'MahasiswaController@updateSuratPengakuanSKS')->name('update_surat_pengakuan_sks');   
    
});


