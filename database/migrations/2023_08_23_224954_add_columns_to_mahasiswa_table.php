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
        $table->string('status_surat_sks_ttd_pengurus');
        $table->string('upload_surat_sks_ttd_mahasiswa');
        $table->string('upload_surat_sks_ttd_pengurus');
        $table->string('status_sptjm_ttd_pengurus');
        $table->string('upload_sptjm_ttd_mahasiswa');
        $table->string('upload_sptjm_ttd_pengurus');
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
