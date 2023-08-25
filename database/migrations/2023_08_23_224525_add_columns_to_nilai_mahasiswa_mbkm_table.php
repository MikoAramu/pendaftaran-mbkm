<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToNilaiMahasiswaMbkmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nilai_mahasiswa_mbkm', function (Blueprint $table) {
        $table->integer('jurusan_id');
        $table->integer('semester_id');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nilai_mahasiswa_mbkm', function (Blueprint $table) {
            //
        });
    }
}
