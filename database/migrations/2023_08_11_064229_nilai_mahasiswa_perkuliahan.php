<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NilaiMahasiswaPerkuliahan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_mahasiswa_perkuliahan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('matkul_id');
            $table->integer('nilai_kuliah');
            $table->integer('nilai_final_kuliah');
            $table->integer('nilai_mahasiswa_mbkm_id');
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
        Schema::dropIfExists('nilai_mahasiswa_perkuliahan');
    }
}
