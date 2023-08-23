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
              <h1>Nilai Perkuliahan </h1>
              <dd>Nilai Perkuliahan Mahasiswa harus sesuai Prodi & Semester yang diikuti</dd>
            </div>

            <div class="card-header">
            <h3 class="card-title">
                <a href="#" class="btn btn-sm btn-success">
                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Konversi Nilai Semua Mahasiswa &nbsp;
                </a>
            </h3>
          </div>

            <div class="row">
            <div class="col">
                <div class="card mb-grid">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-header-title">Table</div>
                  </div>
                  <div class="table-responsive-md">
                    <table class="table table-actions table-striped table-hover mb-0">
                      <thead>
                        <tr>
                          <th scope="col">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-all">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <th scope="col">Kode Mata Kuliah</th>
                          <th scope="col">Nama Mata Kuliah</th>
                          <th scope="col">Jurusan</th>
                          <th scope="col">Semester</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($dataMatakuliah as $mk)
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>{{ $mk->kode_matkul }}</td>
                          <td>{{ $mk->nama_matkul }}</td>
                          <td>{{ $mk->semesters->semester_id}}</td>
                          <td>{{ $mk->jurusan->nama_jurusan }}</td>
                          <td>
                            <a href="{{ route('inputNilai') }}" class="btn btn-sm btn-primary">
                            <i class="oi oi-folder"></i>&nbsp; Masukkan Nilai</a>
                            <a href="{{ route('editNilai') }}" class="btn btn-sm btn-warning">Ubah</a>
                            <a href="{{ route('detailNilai') }}" class="btn btn-sm btn-secondary">Detail</a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>


@endsection
