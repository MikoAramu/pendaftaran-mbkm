<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MataKuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mata_kuliah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_matkul');
            $table->string('nama_matkul');
            $table->string('jumlah_sks');
            $table->boolean('pilihan_konversi_matkul');
            $table->integer('paket_id');
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
        Schema::dropIfExists('mata_kuliah');
    }
}
