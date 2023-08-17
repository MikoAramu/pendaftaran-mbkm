<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\NilaiMahasiswaMbkm;
use App\User;

use Illuminate\Support\Facades\Auth;

class NilaiMahasiswaMbkmController extends Controller
{

    public function inputLaporanAkhirDanNilaiTotal()
{
    $mahasiswa_id = Auth::id(); // Mengambil data user yang sedang login

    $NilaiMahasiswaMbkm = NilaiMahasiswaMbkm::where('mahasiswa_id', $mahasiswa_id)->first();

    return view('mahasiswa.laporan_akhir_dan_nilai_total', [
        'NilaiMahasiswaMbkm' => $NilaiMahasiswaMbkm,
    ]);    
}

// public function inputLaporanAkhirDanNilaiTotal()
// {
//     $user_id = Auth::id();
//     $mahasiswa = Mahasiswa::where('user_id', $user_id)->first();

//     $isRegistered = false;
//     $isRegisteredAndSubmitted = false;

//     if ($mahasiswa) {
//         $isRegistered = true;
//         $nilaiMahasiswaMbkm = NilaiMahasiswaMbkm::where('mahasiswa_id', $mahasiswa->id)->first();
//         if ($nilaiMahasiswaMbkm) {
//             $isRegisteredAndSubmitted = true;
//         }
//     }

//     return view('mahasiswa.laporan_akhir_dan_nilai_total', [
//         'isRegistered' => $isRegistered,
//         'isRegisteredAndSubmitted' => $isRegisteredAndSubmitted,
//     ]);    
// }


public function simpanLaporanAkhirdanNilaiTotal(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([             
            'file_laporan_akhir'=> 'required',  
            'nilai_mbkm'=> 'required',  
        ], [
            'file_laporan_akhir.required' => 'FIle Laporan Akhir belum di upload',
            'nilai_mbkm.required' => 'IPK belum di isi',
        ]);


        $mahasiswa_id = auth()->user()->id;
        

        // Proses pengunggahan file KRS
        if ($request->hasFile('file_laporan_akhir')) {
            $file_laporan_akhir_file = $request->file('file_laporan_akhir');
            
            // Ambil nama asli file yang diunggah
            $file_laporan_akhir_nama = $file_laporan_akhir_file->getClientOriginalName();

            // Simpan file dengan nama asli di dalam folder 'public/file_laporan_akhir'
            $file_laporan_akhirPath = $file_laporan_akhir_file->storeAs('public/file_laporan_akhir', $file_laporan_akhir_nama);
        }        

        $data = [
            'mahasiswa_id' => $mahasiswa_id,                                  
            'file_laporan_akhir' => $file_laporan_akhirPath ?? null,
            'nilai_mbkm' => $request->input('nilai_mbkm'),
        ];


        $NilaiMahasiswaMbkm = NilaiMahasiswaMbkm::create($data);
        $NilaiMahasiswaMbkm->save();


        // Redirect kembali ke halaman formulir dengan pesan sukses
        return redirect()->back()->with('success', 'Pendaftaran berhasil disimpan.');
    }





    // public function create()
    // {
    //     // Ambil data mahasiswa untuk ditampilkan di dropdown
    //     $mahasiswaList = Mahasiswa::all();

    //     return view('mahasiswa.laporan_akhir_dan_nilai_total', compact('mahasiswaList'));
    // }    

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'mahasiswa_id' => 'required',
    //         'nilai_mbkm' => 'required',
    //         'file_laporan_akhir' => 'required|file',
    //     ]);

    //     $nilai = new NilaiMahasiswaMbkm();
    //     $nilai->mahasiswa_id = $request->mahasiswa_id;
    //     $nilai->nilai_mbkm = $request->nilai_mbkm;

    //     // Mengunggah file laporan akhir dan menyimpan nama file ke dalam kolom file_laporan_akhir
    //     if ($request->hasFile('file_laporan_akhir')) {
    //         $file = $request->file('file_laporan_akhir');
    //         $fileName = time() . '_' . $file->getClientOriginalName();
    //         $file->storeAs('laporan_akhir', $fileName);
    //         $nilai->file_laporan_akhir = $fileName;
    //     }

    //     $nilai->save();

    //     return redirect()->route('nilai.create')->with('success', 'Data nilai berhasil disimpan.');
    // }
}
