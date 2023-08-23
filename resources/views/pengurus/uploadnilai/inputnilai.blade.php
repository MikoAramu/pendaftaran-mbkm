@extends('master')
@section('content')

<div class="adminx-content">
    <div class="adminx-main-content">
        <div class="container-fluid">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb adminx-page-breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Nilai Perkuliahan</li>
                </ol>
            </nav>

            <div class="pb-3">
                <h1>Algoritma Pemrograman 2 </h1>
                <p>Silahkan masukkan nilai mahasiswa</p>
            </div>

            <form action="{{ route('simpanNilai') }}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="matkul_id" value="{{ $matkul_id }}">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NPM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Jurusan</th>
                            <th>Semester</th>
                            <th>Input Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dataUsers as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->mahasiswa->npm }}</td>
                            <td>{{ $user->mahasiswa->nama }}</td>
                            <td>{{ $user->mahasiswa->jurusan->nama_jurusan }}</td>
                            <td>{{ $user->mahasiswa->semester->nama_semester }}</td>
                            <td>
                                <input type="number" name="nilai[{{ $user->mahasiswa->id }}]" placeholder="Masukkan nilai">
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <button type="submit" name="button" class="btn btn-primary">Simpan Nilai</button>
            </form>
        </div>
    </div>
</div>

@endsection
