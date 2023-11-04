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

            <form method="POST" action="{{ route('nilaiKonversi') }}">
                @csrf
                <table class="table mt-3" border="1">
                    <thead>
                    <tr>
                        <th rowspan="2" style="text-align: center;">NAMA MAHASISWA</th>
                        @foreach ($dataMatakuliah as $matakuliah)
                            <th colspan="3" style="text-align: center;">{{ $matakuliah->nama_matkul }}</th>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach ($dataMatakuliah as $matakuliah)
                            <th style="text-align: center;">Nilai Kuliah</th>
                            <th style="text-align: center;">Nilai MBKM</th>
                            <th style="text-align: center;">Nilai Akhir</th>
                        @endforeach
                    </tr>
                    </thead>
                    @foreach ($nilaiData as $data)
                        <tr>
                            <td >{{ $data['mahasiswa']->nama }}</td>
                            @foreach ($data['nilaiMahasiswa'] as $nilai)
                                <td style="text-align: center;">{{ $nilai['nilaiKuliah'] }}</td>
                                <td style="text-align: center;">{{ $nilai['nilaiMbkm'] }}</td>
                                <td style="text-align: center;">{{ $nilai['nilaiFinal'] }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </table>
                <button type="submit" class="btn btn-primary">Konversi Nilai</button>
            </form>
        </div>
    </div>
</div>

@endsection
