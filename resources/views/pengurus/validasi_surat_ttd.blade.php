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
                <li class="breadcrumb-item active" aria-current="page">Validasi SPTJM</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Validasi SPTJM </h1>
              <dd>Untuk validasi SPTJM mohon dicek kembali persyaratan surat-suratnya harus lengkap, 
                jika tidak lengkap maka harus dilengkapi sesuai dengan persyaratan yang ada
              </dd>
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
                          <th scope="col">NPM</th>
                          <th scope="col">Nama Lengkap</th>
                          <th scope="col">Kelas</th>
                          <th scope="col">Prodi</th>
                          <th scope="col">No. Telepon</th>
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
                          <td>081263478512</td>
                          <td>
                            <span class="badge badge-pill badge-sm badge-warning">Menunggu Divalidasi</span>
                          </td>
                          <td>
                            <button class="btn btn-sm btn-primary">Cek Surat</button>
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