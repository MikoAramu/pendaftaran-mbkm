<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $table = 'fakultas';

    public function mahasiswa()
    {
    return $this->hasMany(Mahasiswa::class);
    }
}
