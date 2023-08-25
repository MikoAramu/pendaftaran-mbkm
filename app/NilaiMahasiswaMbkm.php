<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiMahasiswaMbkm extends Model
{
    // protected $table = ['paket_id', 'mahasiswa_id', 'nilai_mbkm', 'file_laporan_akhir'];

    protected $table = 'nilai_mahasiswa_mbkm';    

    protected $fillable = ['paket_id', 'mahasiswa_id', 'nilai_mbkm', 'file_laporan_akhir', 'jurusan_id', 'semester_id'];

     public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id');
    }
}
