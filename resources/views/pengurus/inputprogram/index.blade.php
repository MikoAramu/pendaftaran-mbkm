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
                <li class="breadcrumb-item active" aria-current="page">Input Program MBKM</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Input Program Kampus Merdeka </h1>
              <dd>Input Program Kampus Merdeka harus sesuai dengan batch tahun ini</dd>
            </div>

            <div class="card-header">
            <h3 class="card-title">
                <a href="{{ route('createProgram') }}" class="btn btn-sm btn-primary">
                    <i class="nav-icon fas fa-folder-plus"></i> &nbsp; Tambah Program &nbsp;
                </a>
            </h3>
          </div>

            <div class="row">
            <div class="col">
                <div class="card mb-grid">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-header-title">Program</div>
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
                          <th scope="col">Id</th>
                          <th scope="col">Nama Program</th>
                          <th scope="col">Status</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($dataProgram as $data)
                        <tr>
                          <th scope="row">
                            <label class="custom-control custom-checkbox m-0 p-0">
                              <input type="checkbox" class="custom-control-input table-select-row">
                              <span class="custom-control-indicator"></span>
                            </label>
                          </th>
                          <td>{{$data->id}}</td>
                          <td>{{$data->nama_program}}</td>
                          <td>
                            <a href="#" class="btn btn-sm btn-success">Aktif</a>
                            <a href="#" class="btn btn-sm btn-warning">Non-Aktif</a>
                          </td>
                          <td>
                            <a href="{{ route('editProgram', $data->id) }}" class="btn btn-sm btn-primary">Ubah</a>
                            <a href="{{ route('deleteProgram', $data->id) }}" class="btn btn-sm btn-danger">Hapus</button>
                          </td>
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