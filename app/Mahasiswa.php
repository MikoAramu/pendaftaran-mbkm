<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['user_id', 'nama', 'npm', 'kelas', 'nik', 'no_telepon', 'jenis_kelamin', 'alamat',
    'kelurahan', 'kecamatan', 'kota_kabupaten', 'provinsi', 'tempat_lahir', 'tanggal_lahir',
    'jurusan_id', 'fakultas_id', 'program_id', 'foto', 'skrip_nilai_studentsite', 'krs', 'ipk', 'semester_id',
    'status', 'angkatan', 'validasi_prodi', 'validasi_pengurus', 'upload_file_sr', 'upload_sptjm',
    'validasi_sptjm_sr'];

    protected $table = 'mahasiswa';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class, 'fakultas_id');
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class, 'semester_id');
    }
}
