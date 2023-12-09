@extends('master')
@section('content')

<!-- ... Bagian konten lainnya ... -->

<div class="adminx-content">
    <div class="adminx-main-content">
        <div class="container-fluid">
            <nav aria-label="breadcrumb" role="navigation">
                <!-- ... breadcrumb ... -->
            </nav>

            <div class="row">
                <div class="col">
                    <div class="card mb-grid">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="card-header-title">Detail Nilai</div>
                        </div>
                        <div class="card-body">
                            <h4>Detail Mata Kuliah</h4>
                            <!-- ... Informasi mata kuliah ... -->

                            <h4>Nilai Mahasiswa</h4>
                            <table class="table table-bordered">
                                <tr>
                                    <th>Nama Mahasiswa</th>
                                    <th>Nilai Perkuliahan</th>
                                    <th>Nilai MBKM</th>
                                    <th>Nilai Final</th>
                                </tr>
                                @foreach ($nilaiMahasiswa as $index => $nilai)
                                    <tr>
                                        <td>
                                            @if ($nilai['mahasiswa'])
                                                {{ $nilai['mahasiswa']->nama }}
                                            @else
                                                Mahasiswa Tidak Ditemukan
                                            @endif
                                        </td>
                                        <td>{{ $nilai['nilaiKuliah'] ?? 'Nilai Tidak Tersedia'}}</td>
                                        <td>{{ $nilai['nilaiMbkm'] ?? 'Nilai Tidak Tersedia' }}</td>
                                        <td>
                                            @if (isset($nilai['nilaiKuliah']) && isset($nilai['nilaiMbkm']))
                                                {{ max($nilai['nilaiKuliah'], $nilai['nilaiMbkm']) }}
                                            @else
                                                Nilai Tidak Tersedia
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            <div class="form-group row mt-3">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="btn btn-success">Konversi Nilai</button>
                                    <a href="{{ route('indexNilai') }}" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ... Bagian konten lainnya ... -->

@endsection
