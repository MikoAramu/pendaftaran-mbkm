@extends('master')
@section('content')

<div class="adminx-content">
    <div class="adminx-main-content">
        <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb adminx-page-breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Masukkan Nilai Perkuliahan</li>
                </ol>
            </nav>

            <div class="pb-3">
                <h1>Input Nilai Perkuliahan Mahasiswa </h1>
            </div>
        </div>

        <div class="card mb-grid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="link_gambar_mahasiswa.jpg" alt="Foto Mahasiswa" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <ul class="list-unstyled">
                                <li><strong>Nama:</strong> M. Alamsyah Putra Zatmiko</li>
                                <li><strong>Kelas:</strong> 4KA24</li>
                                <li><strong>NPM:</strong> 13119986</li>
                                <li><strong>Jenis Kelamin:</strong> Laki-laki</li>
                                <li><strong>Jurusan:</strong> Sistem Informasi</li>
                                <li><strong>Semester:</strong> 7</li>
                                <li><strong>No. Telepon:</strong> 081263478512</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card mb-grid">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="card-header-title">Nilai</div>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST">
                            {{ csrf_field() }}
                            <table class="table table-bordered">
                                <tr>
                                    <th>Nama Mata Kuliah</th>
                                    <th>Nilai</th>
                                </tr>
                                <tr>
                                    <td>B. Inggris 2</td>
                                    <td>90</td>
                                </tr>
                                <tr>
                                    <td>Algoritma Pemrograman</td>
                                    <td>85</td>
                                </tr>
                                <!-- Tambahkan baris lain sesuai dengan jumlah mata kuliah -->
                            </table>
                            <div class="form-group row mt-3">
                                <div class="col-sm-12 text-center">
                                    <a href="{{ Route('homeNilai') }}" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
