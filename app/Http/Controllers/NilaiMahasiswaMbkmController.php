<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NilaiMahasiswaMbkm;

class NilaiMahasiswaMbkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        // Simpan data nilai mahasiswa MBKM
        NilaiMahasiswaMbkm::create([
            'paket_id' => $request->paket_id,
            'mahasiswa_id' => $request->mahasiswa_id,
            'nilai_mbkm' => $request->nilai_mbkm,
            'file_laporan_akhir' => $request->file_laporan_akhir,
        ]);

        return redirect()->back()->with('success', 'Data nilai mahasiswa MBKM berhasil diunggah.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
