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
    // public function formPendaftaran()
    // {
    //     $user = Auth::user(); // Mengambil data user yang sedang login
    //     $status = $user->mahasiswa ? $user->mahasiswa->status : null; // Mendapatkan status jika ada, jika tidak ada maka null

        

    //     $jurusans = Jurusan::all(); // Mengambil semua data jurusan
    //     $fakultas = Fakultas::all();
    //     $programs = Program::all();
    //     $semesters = Semester::all();

    //     return view('mahasiswa.form_pendaftaran', compact('status', 'jurusans','fakultas','programs','semesters'));
    // }

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
        $request->validate([
            // 'nama' => 'required',
            // 'npm' => 'required',
            // 'kelas' => 'required',
            // 'nik' => 'required',
            // 'no_telepon' => 'required',
            // 'jenis_kelamin' => 'required',
            // 'alamat' => 'required',
            // 'kelurahan' => 'required', 
            // 'kecamatan'=> 'required',  
            // 'kota_kabupaten'=> 'required',  
            // 'provinsi'=> 'required',  
            // 'tempat_lahir'=> 'required',  
            // 'tanggal_lahir'=> 'required', 
            // 'jurusan_id'=> 'required',
            // 'fakultas_id'=> 'required',  
            // 'program_id'=> 'required',  
            // 'foto'=> 'required',  
            // 'skrip_nilai_studentsite'=> 'required',  
            // 'krs'=> 'required',  
            // 'ipk'=> 'required',  
            // 'semester_id'=> 'required',   
            // 'angkatan'=> 'required',  
        ], [
            'nama.required' => 'Nama anda belum di isi',
            'npm.required' => 'NPM anda belum di isi',
            'kelas.required' => 'NPM harus berupa angka',
            'nik.required' => 'NIK anda belum di isi',
            'no_telepon.required' => 'Nomor Telepon anda belum di isi',
            'jenis_kelamin.required' => 'Jenis kelamin anda belum dipilih',
            'alamat.required' => 'Alamat anda belum di isi',
            'kelurahan.required' => 'Kelurahan anda belum di isi',
            'kecamatan.required' => 'Kecamatan anda belum di isi',
            'kota_kabupaten.required' => 'Kota/Kabupaten anda belum di isi',
            'provinsi.required' => 'Provinsi anda belum di isi',
            'tempat_lahir.required' => 'Tempat lahir anda belum di isi',
            'tanggal_lahir.required' => 'Tanggal lahir anda belum di isi',
            'jurusan_id.required' => 'Jurusan belum dipilih',
            'fakultas_id.required' => 'Fakultas belum dipilih',
            'program_id.required' => 'Program belum dipilih',
            'foto.required' => 'Foto belum di upload',
            'skrip_nilai_studentsite.required' => 'Skrip Nilai belum di upload',
            'krs.required' => 'KRS belum di upload',
            'ipk.required' => 'IPK belum di isi',
            'semester_id.required' => 'Semester belum dipilih',
            'angkatan.required' => 'Angkatan belum di isi',
        ]);


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
            // 'program_id' => $request->input('program_id'),
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
                $upload_sptjmPath = $upload_sptjm->storeAs('public/sptjm_mhs_ttd', $upload_sptjmName);
                
                // Simpan path file surat pengakuan SKS ke database
                $mahasiswa->upload_sptjm = $upload_sptjmPath;
            }

            $mahasiswa->save();

            return redirect()->back()->with('success', 'Data berhasil diperbarui');
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }        
    }

    // public function suratPengakuanSKS()
    // {
    //     return view('mahasiswa.form_surat_pengakuan_sks');
    // }

    //     public function updateNPM(Request $request)
// {
//     $request->validate([
//         'id_mahasiswa' => 'required',
//         // 'npm' => 'required',
//         // 'krs' => 'required|mimes:pdf',
//         'matkul' => 'required|array',
//     ]);

//     $mahasiswa = Mahasiswa::find($request->input('id_mahasiswa'));

//     if ($mahasiswa) {
//         $mahasiswa->npm = $request->input('npm');

//         // Proses pengunggahan file KRS
//         if ($request->hasFile('krs')) {
//             $krs_file = $request->file('krs');
//             $krs_ekstensi = $krs_file->getClientOriginalExtension();
//             $krs_nama = $request->input('npm') . '.' . $krs_ekstensi;
//             $krsPath = $krs_file->storeAs('public/krs', $krs_nama);

//             // Simpan path KRS ke database
//             $mahasiswa->krs = $krsPath;
//         }

//         // Mendapatkan nilai dari input 'matkul'
//         $selectedMatkuls = $request->input('matkul');

//         // ... (Kode lainnya)

//         // Mendapatkan data kode_matkul dan nama_matkul dari database berdasarkan $selectedMatkuls
//         $kodeMatkulArray = [];
//         $namaMatkulArray = [];
//         if (!empty($selectedMatkuls)) {
//             foreach ($selectedMatkuls as $matkulId) {
//                 $matkul = Matkul::find($matkulId);
//                 if ($matkul) {
//                     $kodeMatkulArray[] = $matkul->kode_matkul;
//                     $namaMatkulArray[] = $matkul->nama_matkul;
//                 }
//             }
//         }

//         // Menggabungkan kode_matkul menjadi array JSON
//         $kode_matkul = empty($kodeMatkulArray) ? [] : json_encode($kodeMatkulArray);
//         // Menggabungkan nama_matkul menjadi array JSON
//         $nama_matkul = empty($namaMatkulArray) ? [] : json_encode($namaMatkulArray);

//         $totalSKS = 0;
//         if (!empty($selectedMatkuls)) {
//             // Mengambil data SKS berdasarkan id_matkul yang dipilih
//             $selectedSks = Matkul::whereIn('id_matkul', $selectedMatkuls)->pluck('jumlah_sks')->toArray();

//             // Jumlahkan nilai SKS yang dipilih
//             $totalSKS = array_sum($selectedSks);
//         }

//         $mahasiswa->total_sks = $totalSKS;
//         $mahasiswa->kode_matkul = $kode_matkul;
//         $mahasiswa->nama_matkul = $nama_matkul;

//         $mahasiswa->save();

//         return redirect()->back()->with('success', 'Data berhasil diubah');
//     } else {
//         return redirect()->back()->with('error', 'Data tidak ditemukan');
//     }
// }

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
        'program_id'=> 'required',
    ]);

    $mahasiswa = Mahasiswa::find($request->input('id_mahasiswa'));

    if ($mahasiswa) {
        $mahasiswa->mitra_mbkm = $request->input('mitra');
        $mahasiswa->bidang_mbkm = $request->input('bidang');
        $mahasiswa->program_id = $request->input('program_id');        
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

        // return view('mahasiswa.pengumuman_surat_pengakuan_sks');
    }


public function updateSuratPengakuanSKS(Request $request)
{
    $request->validate([
        'id_mahasiswa' => 'required',
        'upload_surat_pengakuan_sks' => 'required|file|mimes:pdf', // Validasi file PDF
    ]);

    $mahasiswa = Mahasiswa::find($request->input('id_mahasiswa'));

    if ($mahasiswa) {
        if ($request->hasFile('upload_surat_pengakuan_sks')) {
            // Proses pengunggahan file surat pengakuan SKS
            $uploadSuratPengakuanSKS = $request->file('upload_surat_pengakuan_sks');
            $uploadSuratPengakuanSKSName = $mahasiswa->npm . '.' . $uploadSuratPengakuanSKS->getClientOriginalExtension();
            $uploadSuratPengakuanSKSPath = $uploadSuratPengakuanSKS->storeAs('public/surat_pengakuan_sks', $uploadSuratPengakuanSKSName);
            
            // Simpan path file surat pengakuan SKS ke database
            $mahasiswa->upload_surat_pengakuan_sks = $uploadSuratPengakuanSKSPath;
        }

        $mahasiswa->save();

        return redirect()->back()->with('success', 'Data berhasil diperbarui');
    } else {
        return redirect()->back()->with('error', 'Data tidak ditemukan');
    }
}




//     public function updateSuratPengakuanSKS(Request $request)
// {
//     $request->validate([
//         'id_mahasiswa' => 'required',
//         // 'mitra' => 'required',
//         // 'bidang' => 'required',
//         // 'program_id'=> 'required',
//         'upload_surat_pengakuan_sks' => 'required',
//     ]);

//     $mahasiswa = Mahasiswa::find($request->input('id_mahasiswa'));

//     if ($mahasiswa) {

//         // Proses pengunggahan file KRS
//         if ($request->hasFile('upload_surat_pengakuan_sks')) {
//             $upload_surat_pengakuan_sks_file = $request->file('upload_surat_pengakuan_sks');
//             $upload_surat_pengakuan_sks_ekstensi = $upload_surat_pengakuan_sks_file->getClientOriginalExtension(); // Menggunakan getClientOriginalExtension() untuk mendapatkan ekstensi
//             $upload_surat_pengakuan_sks_nama = $request->input('npm') . '.' . $upload_surat_pengakuan_sks_ekstensi;
//             $upload_surat_pengakuan_sksPath = $upload_surat_pengakuan_sks_file->storeAs('public/suratsks', $upload_surat_pengakuan_sks_nama);
            
//             // Simpan path KRS ke database
//             $mahasiswa->upload_surat_pengakuan_sks = $upload_surat_pengakuan_sksPath;
//         }

//         // $mahasiswa->mitra_mbkm = $request->input('mitra');
//         // $mahasiswa->bidang_mbkm = $request->input('bidang');
//         // $mahasiswa->program_id = $request->input('program_id');        
//         $mahasiswa->save();

//         return redirect()->back()->with('success', 'Data berhasil diperbarui');
//     } else {
//         return redirect()->back()->with('error', 'Data tidak ditemukan');
//     }
// }

    public function la_dan_nt()
    {
        return view('mahasiswa.laporan_akhir_dan_nilai_total');
    }

    public function dashboard()
    {
        return view('mahasiswa.dashboard');
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
