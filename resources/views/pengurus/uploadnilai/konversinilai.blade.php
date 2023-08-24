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

            <form action="{{ route('konversiNilai') }}" method="POST">
                @csrf
                <input type="hidden" name="matkul_id" value="{{ $matkulId }}">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama NPM Nilai MBKM</th>
                            @foreach($dataMatakuliah as $matakuliah)
                                <th>{{ $matakuliah->nama_matkul }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dataUsers as $user)
                            <tr>
                                <td>{{ $user->nama }} {{ $user->npm }} {{ $user->nilai_mbkm }}</td>
                                @foreach($dataMatakuliah as $matakuliah)
                                    @php
                                        // Cari nilai_mahasiswa_perkuliahan berdasarkan mahasiswa dan matkul
                                        $nilaiPerkuliahan = $user->nilaiMahasiswaPerkuliahan->where('matkul_id', $matakuliah->id)->first();
                                        $nilaiKuliah = ($nilaiPerkuliahan) ? $nilaiPerkuliahan->nilai_kuliah : 0;
                                        $nilaiFinal = max($nilaiKuliah, $user->nilai_mbkm);
                                    @endphp
                                    <td>{{ $nilaiFinal }}</td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <button type="submit" name="button" class="btn btn-primary">Konversi Nilai</button>
                <a href="#" class="btn btn-warning">Kembali</a>
            </form>
        </div>
    </div>
</div>

@endsection
