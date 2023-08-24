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
                <h1>Konversi Nilai Mahasiswa </h1>
                <p>Silahkan masukkan nilai mahasiswa</p>
            </div>

    <form method="POST" action="{{ route('konversiNilai') }}">
        @csrf
        <div class="form-group">
            <label for="matkul_id">Pilih Mata Kuliah:</label>
            <select name="matkul_id" class="form-control">
                @foreach ($dataMatakuliah as $matakuliah)
                    <option value="{{ $matakuliah->id }}">{{ $matakuliah->nama_matkul }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Konversi Nilai</button>
    </form>

    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>Nilai Kuliah</th>
                <th>Nilai MBKM</th>
                <th>Nilai Final</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataUsers as $user)
            <tr>
                <td>{{ $user->nama }}</td>
                @foreach ($dataMatakuliah as $matakuliah)
                    @php
                        $nilaiPerkuliahan = $user->nilaiMahasiswaPerkuliahan ? $user->nilaiMahasiswaPerkuliahan->where('matkul_id', $matakuliah->id)->first() : null;
                        $nilaiKuliah = $nilaiPerkuliahan ? $nilaiPerkuliahan->nilai_kuliah : 0;
                        $nilaiMbkm = $user->nilai_mbkm;
                        $nilaiFinal = max($nilaiKuliah, $nilaiMbkm);
                    @endphp
                    <td>
                        Debug: {{ $nilaiPerkuliahan }} - {{ $nilaiKuliah }} - {{ $nilaiMbkm }} - {{ $nilaiFinal }}
                    </td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
