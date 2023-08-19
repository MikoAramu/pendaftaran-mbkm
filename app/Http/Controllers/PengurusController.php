<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Program;
Use Alert;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function validasiSuratpengakuan()
    {
        return view('pengurus.validasi_surat_pengakuan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function validasiSuratTtd()
    {
        return view('pengurus.validasi_surat_ttd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadNilaiPerkuliahan(Request $request)
    {
        
        return view('pengurus.upload_nilai_perkuliahan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataProgram = Program::all();
        return view('pengurus.inputprogram.index', compact('dataProgram'));
    }

    public function createProgram()
    {
        return view('pengurus.inputprogram.create');
    }

    public function saveProgram(Request $request)
    {
        $save = Program::create($request->all());

        if (!$save) {
            Alert::error('Error', 'Gagal Mengingput Program !');
            return redirect()->back();
        }

        Alert::success('Success', 'Berhasil Menginput Program!');
        return redirect()->route('indexProgram');


    }

    public function editProgram($id)
    {
        $program = Program::find($id);
        return view('pengurus.inputprogram.edit', compact('program'));
    }

    public function updateProgram(Request $request)
    {
        $update = Program::find($request->id)->update($request->all());

        if (!$update) {
            Alert::error('Error', 'Gagal Mengubah Program!');
            return redirect()->back();
        }

        Alert::success('Success', 'Berhasil Mengubah Program!');
        return redirect()->route('indexProgram');
    }

    public function deleteProgram($id)
    {
        $delete = Program::find($id)->delete();

        if (!$delete) {
            Alert::error('Error', 'Gagal Menghapus Program!');
            return redirect()->back();
        }

        Alert::success('Success', 'Berhasil Menghapus Program!');
        return redirect()->route('indexProgram');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function indexNilai()
    {
        return view('pengurus.uploadnilai.index');
    }

    public function createNilai()
    {
        return view('pengurus.uploadnilai.create');
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
