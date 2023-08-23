<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameSemesterToNamaSemesterInTableSemester extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nama_semester_in_table_semester', function (Blueprint $table) {
            $table->renameColumn('semester', 'nama_semester');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nama_semester_in_table_semester', function (Blueprint $table) {
            $table->renameColumn('nama_semester','semester');
        });
    }
}
