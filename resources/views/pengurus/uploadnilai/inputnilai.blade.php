@extends('master')
@section('content')

<div class="adminx-content">
        <!-- <div class="adminx-aside">

        </div> -->

        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nilai Perkuliahan</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Silahkan masukkan nilai mahasiswa</h1>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NPM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Jurusan</th>
                        <th>Semester</th>
                        <th>Input Nilai</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($datauser as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->npm }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->jurusan }}</td>
                        <td>{{ $user->semester }}</td>
                        <td>
                            <form action="#" method="post">
                                @csrf
                                <input type="hidden" name="mahasiswa_id" value="{{ $user->id }}">
                                <select name="matkul_id">
                                    @foreach($dataMatakuliah as $mk)
                                    <option value="{{ $mk->id }}">{{ $mk->nama_matkul }}</option>
                                    @endforeach
                                </select>
                                <input type="number" name="nilai_kuliah" value="">
                        </td>
                        <td>
                            <!-- Simpan tombol di sini -->
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

@endsection
