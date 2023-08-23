<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiMahasiswaPerkuliahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homeNilai()
    {
        return view('pengurus.uploadnilai.home');
    }

    public function masukNilai()
    {
        return view('pengurus.uploadnilai.inputnilai');
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
