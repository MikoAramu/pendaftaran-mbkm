<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->string('upload_sptjm_ttd')->nullable();
            $table->string('upload_surat_pengakuan_sks')->nullable();
            $table->enum('validasi_pengurus_surat_pengakuan_sks', ['Menunggu Validasi', 'Sudah Valid', 'Tidak Valid'])->default('Menunggu Validasi');
            $table->string('upload_surat_pengakuan_sks_ttd')->nullable();
            $table->string('bidang_mbkm')->nullable();
            $table->string('mitra_mbkm')->nullable();
            $table->enum('status_surat_pengakuan_sks', ['Menunggu Validasi', 'Sudah Valid', 'Tidak Valid'])->default('Menunggu Validasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswa', function (Blueprint $table) {
            //
        });
    }
}
