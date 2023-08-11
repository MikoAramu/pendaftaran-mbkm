<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    //
    protected $table = ['kode_matkul', 'nama_matkul', 'jumlah_sks', 'piliihan_konversi_matkul', 'paket_id'];
    
}
