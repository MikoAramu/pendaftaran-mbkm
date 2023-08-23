<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

Use App\MataKuliah;
use App\User;
use App\Mahasiswa;
use App\NilaiMahasiswaPerkuliahan;

class NilaiMahasiswaPerkuliahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexNilai()
    {
        $dataMatakuliah = MataKuliah::with(['jurusan','semesters'])->get();
        return view('pengurus.uploadnilai.index', ['dataMatakuliah' => $dataMatakuliah]);
    }

    public function inputNilai(Request $request, $id)
    {
        $dataUsers = User::where('role', 'mahasiswa')->get();
        $npm = $request->npm; // Mendapatkan npm dari request
        $matkul_id = $id; // Ambil nilai matkul_id dari parameter
        return view('pengurus.uploadnilai.inputnilai', compact('dataUsers', 'id', 'npm', 'matkul_id'));
    }


    public function simpanNilai(Request $request)
    {
        $request->validate([
            'nilai.*' => 'required', // Validasi untuk semua nilai
            'matkul_id' => 'required',
        ]);
    
        $matkulId = $request->matkul_id;
    
        $nilaiData = []; // Menyimpan data nilai untuk disimpan nanti
    
        foreach ($request->nilai as $mahasiswaId => $nilai) {
            $nilaiData[] = [
                'mahasiswa_id' => $mahasiswaId,
                'matkul_id' => $matkulId,
                'nilai_kuliah' => $nilai,
            ];
        }
    
        if (NilaiMahasiswaPerkuliahan::insert($nilaiData)) {
            return redirect()->route('inputNilai', ['id' => $matkulId])->with('success', 'Nilai berhasil disimpan');
        } else {
            return redirect()->route('inputNilai', ['id' => $matkulId])->with('error', 'Gagal menyimpan nilai');
        }
    }    

     public function editNilai()
    {
        //$nilai = Program::find($id);
        return view('pengurus.uploadnilai.edit');
    }

    public function detailNilai()
    {
        return view('pengurus.uploadnilai.detail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function masukNilai()
    //{
    //    return view('pengurus.uploadnilai.masuk');
    //}

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
