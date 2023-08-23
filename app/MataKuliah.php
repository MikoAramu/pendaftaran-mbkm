<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    //
    protected $table = ['kode_matkul', 'nama_matkul', 'jumlah_sks', 'status_konversi', 'paket_id'];
    
}
