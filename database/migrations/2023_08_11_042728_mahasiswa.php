<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('nama');
            $table->string('npm');
            $table->string('nik');
            $table->string('jenis_kelamin');
            $table->longText('alamat');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('kota_kabupaten');
            $table->string('provinsi');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->integer('prodi_id');
            $table->integer('program_id');
            $table->string('foto');
            $table->string('skrip_nilai_studentsite');
            $table->string('krs');
            $table->string('ipk');
            $table->integer('semester_id');
            $table->enum('status', ['Menunggu Validasi', 'Tidak Lolos Validasi', 'Anda Tervalidasi Prodi', 'Anda Tervalidasi Prodi dan Pengurus']);
            $table->string('angkatan');
            $table->boolean('validasi_prodi');
            $table->boolean('validasi_pengurus');
            $table->string('upload_file_sr');
            $table->string('upload_sptjm');
            $table->boolean('validasi_spjm_sr');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa');
    }
}
