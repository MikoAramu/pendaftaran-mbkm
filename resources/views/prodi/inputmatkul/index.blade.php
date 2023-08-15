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
                <li class="breadcrumb-item"><a href="#">Upload Mata Kuliah</a></li>
                <li class="breadcrumb-item active" aria-current="page">Index</li>
              </ol>
            </nav>

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
                                <li><strong>Program:</strong> Studi Independen</li>
                                <li><strong>Bidang:</strong> UI/UX Design Mastery</li>
                                <li><strong>Mitra:</strong> PT. Impactbyte Teknologi Informasi</li>
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
                    <div class="card-header-title">Mata Kuliah</div>
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
                          <th scope="col">Jumlah SKS</th>
                          <th scope="col">Prodi</th>
                          <th scope="col">Semester</th>
                          <th scope="col">Keterangan</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>AK011326</td>
                          <td>TESTING DAN IMPLEMENTASI SISTEM</td>
                          <td>2</td>
                          <td>Sistem Informasi</td>
                          <td>Semester 7</td>
                          <td>Dapat dikonversi</td>
                          <td>
                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Hapus</a>
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