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
                <h1>Konversi Nilai Mahasiswa</h1>
                <p>Periksa penilaian mahasiswa untuk melakukan konversi</p>
            </div>

            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>Nama</th>
                        @foreach ($dataMatakuliah as $matakuliah)
                            <th>{{ $matakuliah->nama_matkul }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataUsers as $user)
                        @if ($user->role === 'mahasiswa')
                            <tr>
                                <td>{{ $user->mahasiswa->nama }}</td>
                                @foreach ($dataMatakuliah as $matakuliah)
                                    @php
                                        $nilaiPerkuliahan = $user->nilaiMahasiswaPerkuliahan->where('matkul_id', $matakuliah->id)->first();
                                        $nilaiKuliah = $nilaiPerkuliahan ? $nilaiPerkuliahan->nilai_kuliah : 0;
                                        $nilaiMbkm = $user->nilai_mbkm;
                                        $nilaiFinal = max($nilaiKuliah, $nilaiMbkm);
                                    @endphp
                                    <td>
                                        <div>Nilai Kuliah: {{ $nilaiKuliah }}</div>
                                        <div>Nilai MBKM: {{ $nilaiMbkm }}</div>
                                        <div>Nilai Final: {{ $nilaiFinal }}</div>
                                    </td>
                                @endforeach
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>

            <div class="mt-3">
                <form method="POST" action="#">
                    @csrf
                    <button type="submit" class="btn btn-primary">Konversi Nilai Semua Mahasiswa</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
