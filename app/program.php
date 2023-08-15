<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    protected $table = 'program';

    public function mahasiswa()
    {
    return $this->hasMany(Mahasiswa::class);
    }
}
