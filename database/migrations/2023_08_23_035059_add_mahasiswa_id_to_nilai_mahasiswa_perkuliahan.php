<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMahasiswaIdToNilaiMahasiswaPerkuliahan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nilai_mahasiswa_perkuliahan', function (Blueprint $table) {
            $table->integer('mahasiswa_id')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nilai_mahasiswa_perkuliahan', function (Blueprint $table) {
            //
        });
    }
}
