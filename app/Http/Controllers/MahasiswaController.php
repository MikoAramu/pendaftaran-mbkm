<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswa; // Pastikan Anda mengimport model Mahasiswa
use Illuminate\Support\Facades\Auth;

use App\Program;
use App\Prodi;
use App\Pendaftar;
use App\PaketMatkul;
use App\User;
use App\Jurusan;
use App\Fakultas;
use App\Semester;

use Illuminate\Support\Facades\Log;

// use Barryvdh\DomPDF\Facade\Pdf;
use PDF;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function formPendaftaran()
{
    $user = Auth::user(); // Mengambil data user yang sedang login
    $statusMahasiswaIsNull = $user->mahasiswa ? $user->mahasiswa->status : null; // Mendapatkan status jika ada, jika tidak ada maka null
    // dd($statusMahasiswaIsNull);

    $jurusans = Jurusan::all(); // Mengambil semua data jurusan
    $fakultas = Fakultas::all();
    $programs = Program::all();
    $semesters = Semester::all();

    return view('mahasiswa.form_pendaftaran', compact('statusMahasiswaIsNull', 'jurusans', 'fakultas', 'programs', 'semesters'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pengumumanPendaftaran()
    {
        $user_id = Auth::id();

    $mahasiswa = Mahasiswa::where('user_id', $user_id)->first(); // Mengambil data mahasiswa berdasarkan user_id

    return view('mahasiswa.pengumuman_pendaftaran', [
        'mahasiswa' => $mahasiswa,
    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpanPendaftaran(Request $request)
    {
        // Validasi data yang diterima dari formulir
        // $request->validate([
        //     'nama' => 'required',
        //     'npm' => 'required',
        //     'kelas' => 'required',
        //     'nik' => 'required',
        //     'no_telepon' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'alamat' => 'required',
        //     'kelurahan' => 'required', 
        //     'kecamatan'=> 'required',  
        //     'kota_kabupaten'=> 'required',  
        //     'provinsi'=> 'required',  
        //     'tempat_lahir'=> 'required',  
        //     'tanggal_lahir'=> 'required', 
        //     'jurusan_id'=> 'required',
        //     'fakultas_id'=> 'required',  
        //     'program_id'=> 'required',  
        //     'foto'=> 'required',  
        //     'skrip_nilai_studentsite'=> 'required',  
        //     'krs'=> 'required',  
        //     'ipk'=> 'required',  
        //     'semester_id'=> 'required',   
        //     'angkatan'=> 'required',  
        // ], [
        //     'nama.required' => 'Nama anda belum di isi',
        //     'npm.required' => 'NPM anda belum di isi',
        //     'kelas.required' => 'NPM harus berupa angka',
        //     'nik.required' => 'NIK anda belum di isi',
        //     'no_telepon.required' => 'Nomor Telepon anda belum di isi',
        //     'jenis_kelamin.required' => 'Jenis kelamin anda belum dipilih',
        //     'alamat.required' => 'Alamat anda belum di isi',
        //     'kelurahan.required' => 'Kelurahan anda belum di isi',
        //     'kecamatan.required' => 'Kecamatan anda belum di isi',
        //     'kota_kabupaten.required' => 'Kota/Kabupaten anda belum di isi',
        //     'provinsi.required' => 'Provinsi anda belum di isi',
        //     'tempat_lahir.required' => 'Tempat lahir anda belum di isi',
        //     'tanggal_lahir.required' => 'Tanggal lahir anda belum di isi',
        //     'jurusan_id.required' => 'Jurusan belum dipilih',
        //     'fakultas_id.required' => 'Fakultas belum dipilih',
        //     'program_id.required' => 'Program belum dipilih',
        //     'foto.required' => 'Foto belum di upload',
        //     'skrip_nilai_studentsite.required' => 'Skrip Nilai belum di upload',
        //     'krs.required' => 'KRS belum di upload',
        //     'ipk.required' => 'IPK belum di isi',
        //     'semester_id.required' => 'Semester belum dipilih',
        //     'angkatan.required' => 'Angkatan belum di isi',
        // ]);


        $user_id = auth()->user()->id;

        // Proses pengunggahan file foto
        if ($request->hasFile('foto')) {
            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = $request->get('npm') . '.' . $foto_ekstensi;
            $fotoPath = $foto_file->storeAs('public/foto', $foto_nama);
        }

        // Proses pengunggahan file KRS
        if ($request->hasFile('krs')) {
            $krs_file = $request->file('krs');
            $krs_ekstensi = $krs_file->extension();
            $krs_nama = $request->get('npm') . '.' . $krs_ekstensi;
            $krsPath = $krs_file->storeAs('public/krs', $krs_nama);
        }

        // Proses pengunggahan file skrip nilai
        if ($request->hasFile('skrip_nilai_studentsite')) {
            $skrip_nilai_file = $request->file('skrip_nilai_studentsite');
            $skrip_nilai_ekstensi = $skrip_nilai_file->extension();
            $skrip_nilai_nama = $request->get('npm') . '.' . $skrip_nilai_ekstensi;
            $skrip_nilaiPath = $skrip_nilai_file->storeAs('public/skrip_nilai_studentsite', $skrip_nilai_nama);
        }

        $data = [
            'user_id' => $user_id,
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas' => $request->input('kelas'),
            'nik' => $request->input('nik'),
            'no_telepon' => $request->input('no_telepon'),
            'foto' => $fotoPath ?? null,
            'skrip_nilai_studentsite' => $skrip_nilaiPath ?? null,            
            'krs' => $krsPath ?? null,
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'alamat' => $request->input('alamat'),
            'kelurahan' => $request->input('kelurahan'),
            'kecamatan' => $request->input('kecamatan'),
            'kota_kabupaten' => $request->input('kota_kabupaten'),
            'provinsi' => $request->input('provinsi'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'jurusan_id' => $request->input('jurusan_id'),
            'fakultas_id' => $request->input('fakultas_id'),
            'program_id' => $request->input('program_id'),
            'ipk' => $request->input('ipk'),
            'semester_id' => $request->input('semester_id'),
            'angkatan' => $request->input('angkatan'),
        ];


        $mahasiswa = Mahasiswa::create($data);

        $mahasiswa->status = 'Menunggu Validasi';             
        $mahasiswa->save();

        // Redirect kembali ke halaman formulir dengan pesan sukses
        return redirect()->back()->with('success', 'Pendaftaran berhasil disimpan.');
    }

    public function cetaksuratrekomendasi()
    {
        $user_id = Auth::id();
        $mahasiswa = Mahasiswa::where('user_id', $user_id)->first();

        if ($mahasiswa && $mahasiswa->user) {
            // Render PDF untuk pratinjau
            $pdf_preview = PDF::loadView('mahasiswa.surat_rekomendasi', compact('mahasiswa'));

            // Tampilkan pratinjau PDF ke pengguna
            return $pdf_preview->stream('surat_rekomendasi_preview.pdf');
        }

        // Jika mahasiswa tidak ditemukan atau tidak terkait dengan user, Anda dapat mengembalikan respons sesuai kebutuhan, misalnya:
        return response()->json(['message' => 'Data mahasiswa tidak ditemukan'], 404);
    }

    public function cetaksptjm()
    {
        $user_id = Auth::id();
        $mahasiswa = Mahasiswa::where('user_id', $user_id)->first();

        if ($mahasiswa && $mahasiswa->user) {
            // Render PDF untuk pratinjau
            $pdf_preview = PDF::loadView('mahasiswa.sptjm', compact('mahasiswa'));

            // Tampilkan pratinjau PDF ke pengguna
            return $pdf_preview->stream('sptjm_preview.pdf');
        }

        // Jika mahasiswa tidak ditemukan atau tidak terkait dengan user, Anda dapat mengembalikan respons sesuai kebutuhan, misalnya:
        return response()->json(['message' => 'Mahasiswa tidak ditemukan'], 404);
    }

    public function updateSPTJM(Request $request)
    {
        
        $request->validate([
        'id_mahasiswa' => 'required',
        'upload_sptjm' => 'required|file|mimes:pdf', // Validasi file PDF
        ]);

        $mahasiswa = Mahasiswa::find($request->input('id_mahasiswa'));

        if ($mahasiswa) {
            if ($request->hasFile('upload_sptjm')) {
                // Proses pengunggahan file surat pengakuan SKS
                $upload_sptjm = $request->file('upload_sptjm');
                $upload_sptjmName = $mahasiswa->npm . '.' . $upload_sptjm->getClientOriginalExtension();
                $upload_sptjmPath = $upload_sptjm->storeAs('public/sptjm_ttd_mahasiswa', $upload_sptjmName);
                
                // Simpan path file surat pengakuan SKS ke database
                $mahasiswa->upload_sptjm_ttd_mahasiswa = $upload_sptjmPath;
                $mahasiswa->status_sptjm_ttd_pengurus = 'Menunggu Validasi';
            }

            $mahasiswa->save();

            return redirect()->back()->with('success', 'Data berhasil diperbarui');
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }        
    }

public function suratPengakuanSKS()
{
    $programs = Program::all();
    $jurusans = Jurusan::all();
    $fakultas = Fakultas::all();                
    $user_id = Auth::id();
    $mahasiswa = Mahasiswa::where('user_id', $user_id)->first();
    $status = $mahasiswa ? $mahasiswa->status : null;
    $bidang_mbkm = $mahasiswa ? $mahasiswa->bidang_mbkm : null;

    return view('mahasiswa.form_surat_pengakuan_sks', [
        'programs' => $programs,
        'jurusans' => $jurusans,
        'fakultass' => $fakultas,
        'status' => $status,
        'mahasiswa' => $mahasiswa,
        'bidang_mbkm' => $bidang_mbkm,
    ]);
}


public function updateMitraBidang(Request $request)
{
    $request->validate([
        'id_mahasiswa' => 'required',
        'mitra' => 'required',
        'bidang' => 'required',
        // 'program_id'=> 'required',
    ]);

    $mahasiswa = Mahasiswa::find($request->input('id_mahasiswa'));

    if ($mahasiswa) {
        $mahasiswa->mitra_mbkm = $request->input('mitra');
        $mahasiswa->bidang_mbkm = $request->input('bidang');
        // $mahasiswa->program_id = $request->input('program_id');        
        $mahasiswa->save();

        return redirect()->back()->with('success', 'Data berhasil diperbarui');
    } else {
        return redirect()->back()->with('error', 'Data tidak ditemukan');
    }
}


    public function pengumumanSuratPengakuanSKS()
    {

        $user_id = Auth::id();

    $mahasiswa = Mahasiswa::where('user_id', $user_id)->first(); // Mengambil data mahasiswa berdasarkan user_id

    return view('mahasiswa.pengumuman_surat_pengakuan_sks', [
        'mahasiswa' => $mahasiswa,
    ]);        
    }

    public function cetaksuratsks()
    {
        $user_id = Auth::id();
        $mahasiswa = Mahasiswa::where('user_id', $user_id)->first();

        if ($mahasiswa && $mahasiswa->user) {
            // Render PDF untuk pratinjau
            $pdf_preview = PDF::loadView('mahasiswa.surat_sks', compact('mahasiswa'));

            // Tampilkan pratinjau PDF ke pengguna
            return $pdf_preview->stream('surat_sks_preview.pdf');
        }

        // Jika mahasiswa tidak ditemukan atau tidak terkait dengan user, Anda dapat mengembalikan respons sesuai kebutuhan, misalnya:
        return response()->json(['message' => 'Data mahasiswa tidak ditemukan'], 404);
    }


public function updateSuratPengakuanSKS(Request $request)
{
    $request->validate([
        'id_mahasiswa' => 'required',
        'upload_surat_sks_ttd_mahasiswa' => 'required|file|mimes:pdf', // Validasi file PDF
    ]);

    $mahasiswa = Mahasiswa::find($request->input('id_mahasiswa'));

    if ($mahasiswa) {
        if ($request->hasFile('upload_surat_sks_ttd_mahasiswa')) {
            // Proses pengunggahan file surat pengakuan SKS
            $uploadSuratPengakuanSKS = $request->file('upload_surat_sks_ttd_mahasiswa');
            $uploadSuratPengakuanSKSName = $mahasiswa->npm . '.' . $uploadSuratPengakuanSKS->getClientOriginalExtension();
            $uploadSuratPengakuanSKSPath = $uploadSuratPengakuanSKS->storeAs('public/surat_sks_ttd_mahasiswa', $uploadSuratPengakuanSKSName);
            
            // Simpan path file surat pengakuan SKS ke database
            $mahasiswa->upload_surat_sks_ttd_mahasiswa = $uploadSuratPengakuanSKSPath;  
            $mahasiswa->status_surat_sks_ttd_pengurus = 'Menunggu Validasi';
          
        }
        
        $mahasiswa->save();

        return redirect()->back()->with('success', 'Data berhasil diperbarui');
    } else {
        return redirect()->back()->with('error', 'Data tidak ditemukan');
    }
}

    public function la_dan_nt()
    {
        return view('mahasiswa.laporan_akhir_dan_nilai_total');
    }

    public function dashboardMahasiswa()
    {
        return view('mahasiswa.dashboard_mahasiswa');
    }

        public function petunjukPenggunaan()
    {
        return view('mahasiswa.petunjuk_penggunaan');
    }
}
