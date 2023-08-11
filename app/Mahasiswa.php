<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = ['user_id', 'nama', 'npm', 'nik', 'jenis_kelamin', 'alamat',
    'kelurahan', 'kecamatan', 'kota_kabupaten', 'provinsi', 'tempat_lahir', 'tanggal_lahir',
    'prodi_id', 'program_id', 'foto', 'skrip_nilai_studentsite', 'krs', 'ipk', 'semester_id',
    'status', 'angkatan', 'validasi_prodi', 'validasi_pengurus', 'upload_file_sr', 'upload_sptjm',
    'validasi_sptjm_sr'];
}
