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
                <li class="breadcrumb-item active" aria-current="page">Validasi Surat Pengakuan SKS</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Validasi Surat Pengakuan SKS</h1>
              <dd>Untuk validasi surat pengakuan SKS mohon dicek kembali pengisian data Kampus Merdeka harus sesuai
              </dd>
            </div>

            <div class="row">
            <div class="col">
                <div class="card mb-grid">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-header-title">Mahasiswa Kampus Merdeka</div>
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
                          <th scope="col">NPM</th>
                          <th scope="col">Nama Lengkap</th>
                          <th scope="col">Kelas</th>
                          <th scope="col">Prodi</th>
                          <th scope="col">Bidang</th>
                          <th scope="col">Mitra</th>
                          <th scope="col">Status</th>
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
                          <td>13119986</td>
                          <td>M. Alamsyah Putra Zatmiko</td>
                          <td>4KA24</td>
                          <td>Sistem Informasi</td>
                          <td>UI/UX Design Mastery</td>
                          <td>PT. Impactbyte Teknologi Informasi</td>
                          <td>
                            <span class="badge badge-pill badge-sm badge-success">Tervalidasi Prodi</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Cek Data</button>
                            <button class="btn btn-sm btn-success">Validasi</button>
                            <button class="btn btn-sm btn-danger">Tolak</button>
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
