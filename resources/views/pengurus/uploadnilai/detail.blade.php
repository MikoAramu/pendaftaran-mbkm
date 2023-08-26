@extends('master')
@section('content')

<!-- ... Bagian konten lainnya ... -->

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

<div class="row">
    <div class="col">
        <div class="card mb-grid">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div class="card-header-title">Detail Nilai</div>
            </div>
            <div class="card-body">
                <h4>Detail Mata Kuliah</h4>
                <p><strong>Nama Matkul:</strong> {{ $matkul->nama_matkul }}</p>
                <p><strong>Kode Mata Kuliah:</strong> {{ $matkul->kode_matkul }}</p>
                <p><strong>Jurusan:</strong> {{ $matkul->jurusan->nama_jurusan }}</p>
                <p><strong>Semester:</strong> {{ $matkul->semester_id }}</p>

                <h4>Nilai Mahasiswa</h4>
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Mahasiswa</th>
                        <th>Nilai Perkuliahan</th>
                        <th>Nilai MBKM</th>
                    </tr>
                    @foreach ($nilaiMahasiswa as $index => $nilai)
                        <tr>
                            <td>{{ $nilai->mahasiswa->nama }}</td>
                            <td>{{ $nilai->nilai_kuliah ?? 'Nilai Tidak Tersedia'}}</td>
                            <td>{{ $nilai_mbkm[$index]['nilai_mbkm'] ?? 'Nilai Tidak Tersedia' }}</td>
                        </tr>
                    @endforeach
                </table>
                <div class="form-group row mt-3">
                    <div class="col-sm-12 text-right">
                        <a href="{{ Route('indexNilai') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ... Bagian konten lainnya ... -->

@endsection
