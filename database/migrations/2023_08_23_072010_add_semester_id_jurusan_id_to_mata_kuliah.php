<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSemesterIdJurusanIdToMataKuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mata_kuliah', function (Blueprint $table) {
            $table->integer('semester_id')->after('status_konversi');
            $table->integer('jurusan_id')->after('semester_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mata_kuliah', function (Blueprint $table) {
            //
        });
    }
}
