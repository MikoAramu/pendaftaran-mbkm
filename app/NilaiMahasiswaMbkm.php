<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiMahasiswaMbkm extends Model
{
    //
    protected $table = ['paket_id', 'mahasiswa_id', 'nilai_mbkm', 'file_laporan_akhir'];
}
