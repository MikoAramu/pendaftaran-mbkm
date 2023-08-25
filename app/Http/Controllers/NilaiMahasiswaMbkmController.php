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

public function simpanLaporanAkhirdanNilaiTotal(Request $request)
{
    $request->validate([
        'file_laporan_akhir' => 'required',
        'nilai_mbkm' => 'required',
    ], [
        'file_laporan_akhir.required' => 'File Laporan Akhir belum diupload',
        'nilai_mbkm.required' => 'IPK belum diisi',
    ]);

    $mahasiswa_id = auth()->user()->id;

    $mahasiswa = Mahasiswa::where('user_id', $mahasiswa_id)->first();

    if (!$mahasiswa) {
        return redirect()->back()->with('error', 'Data mahasiswa tidak ditemukan.');
    }

    if ($request->hasFile('file_laporan_akhir')) {
        $file_laporan_akhir_file = $request->file('file_laporan_akhir');
        $file_laporan_akhir_nama = $file_laporan_akhir_file->getClientOriginalName();
        $file_laporan_akhirPath = $file_laporan_akhir_file->storeAs('public/laporan_akhir', $file_laporan_akhir_nama);
    }

    $data = [
        'mahasiswa_id' => $mahasiswa_id,
        'jurusan_id' => $mahasiswa->jurusan_id, // Ambil dari tabel mahasiswa
        'semester_id' => $mahasiswa->semester_id, // Ambil dari tabel mahasiswa
        'file_laporan_akhir' => $file_laporan_akhirPath ?? null,
        'nilai_mbkm' => $request->input('nilai_mbkm'),
    ];

    $NilaiMahasiswaMbkm = NilaiMahasiswaMbkm::create($data);

    return redirect()->back()->with('success', 'Pendaftaran berhasil disimpan.');
}


    // public function simpanLaporanAkhirdanNilaiTotal(Request $request)
    // {
    //     $request->validate([
    //         'file_laporan_akhir' => 'required',
    //         'nilai_mbkm' => 'required',
    //     ], [
    //         'file_laporan_akhir.required' => 'File Laporan Akhir belum diupload',
    //         'nilai_mbkm.required' => 'IPK belum diisi',
    //     ]);

    //     $mahasiswa_id = auth()->user()->id;

    //     if ($request->hasFile('file_laporan_akhir')) {
    //         $file_laporan_akhir_file = $request->file('laporan_akhir');
    //         $file_laporan_akhir_nama = $file_laporan_akhir_file->getClientOriginalName();
    //         $file_laporan_akhirPath = $file_laporan_akhir_file->storeAs('public/file_laporan_akhir', $file_laporan_akhir_nama);
    //     }

    //     $data = [
    //         'mahasiswa_id' => $mahasiswa_id,
    //         'file_laporan_akhir' => $file_laporan_akhirPath ?? null,
    //         'nilai_mbkm' => $request->input('nilai_mbkm'),
    //     ];

    //     $NilaiMahasiswaMbkm = NilaiMahasiswaMbkm::create($data);
    //     $NilaiMahasiswaMbkm->save();

    //     return redirect()->back()->with('success', 'Pendaftaran berhasil disimpan.');
    // }

    // ... Potongan kode lainnya ...

    public function index()
    {
        $nilaiMahasiswaMbkm = NilaiMahasiswaMbkm::all();
        return view('pengurus.index_nilai', compact('nilaiMahasiswaMbkm'));
    }

    public function upload(Request $request)
    {
        // Validasi data
        $request->validate([
            'mahasiswa_id' => 'required',
            'nilai_mbkm' => 'required',
        ]);

        NilaiMahasiswaMbkm::create([
            'paket_id' => $request->paket_id,
            'mahasiswa_id' => $request->mahasiswa_id,
            'nilai_mbkm' => $request->nilai_mbkm,
            'file_laporan_akhir' => $request->file_laporan_akhir,
        ]);

        return redirect()->back()->with('success', 'Data nilai mahasiswa MBKM berhasil diunggah.');
    }
}
