<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NilaiMahasiswaMbkm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_mahasiswa_mbkm', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paket_id')->nullable();
            $table->integer('mahasiswa_id');
            $table->integer('nilai_mbkm')->nullable();
            $table->string('file_laporan_akhir')->nullable();
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
        Schema::dropIfExists('nilai_mahasiswa_mbkm');
    }
}
