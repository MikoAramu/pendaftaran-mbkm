<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiMahasiswaPerkuliahan extends Model
{
    //
    protected $table = ['matkul_id', 'nilai_kuliah', 'nilai_final_kuliah', 'nilai_mahasiswa_mbkm_id'];
    
}
