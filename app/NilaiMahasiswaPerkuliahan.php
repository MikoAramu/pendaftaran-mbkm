<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiMahasiswaPerkuliahan extends Model
{
    
    protected $table = 'nilai_mahasiswa_perkuliahan';
    
    protected $fillable = [
        'mahasiswa_id',
        'matkul_id',
        'nilai_kuliah',
    ];

    public function mahasiswa()
    {
    return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id');
    }

    public function matkul()
    {
    return $this->belongsTo(MataKuliah::class, 'matkul_id');
    }

}
