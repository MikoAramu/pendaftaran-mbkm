<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddValidasiPengurusToMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->enum('validasi_pengurus', ['Menunggu Validasi', 'Sudah Valid', 'Tidak Valid'])                  
                  ->after('angkatan');
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
