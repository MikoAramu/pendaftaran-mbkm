@extends('master')
@section('content')

<div class="adminx-content">
    <div class="adminx-main-content">
        <div class="container-fluid">
            <!-- Bagian lain dari tampilan -->

            <form method="POST" action="{{ route('nilaiKonversi') }}">
                @csrf
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>Nama Mahasiswa</th>
                            @foreach ($dataMatakuliah as $matakuliah)
                                <th>{{ $matakuliah->nama_matkul }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nilaiData as $data)
                            <tr>
                                <td>{{ $data['mahasiswa']->nama }}</td>
                                @foreach ($data['nilaiMahasiswa'] as $nilai)
                                    <td>
                                        <div>Nilai Kuliah: {{ $nilai['nilaiKuliah'] }}</div>
                                        <div>Nilai MBKM: {{ $nilai['nilaiMbkm'] }}</div>
                                        <div>Nilai Akhir: {{ $nilai['nilaiFinal'] }}</div>
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary">Konversi Nilai</button>
            </form>
        </div>
    </div>
</div>

@endsection
