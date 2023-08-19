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
          </div>

            <div class="row">
                <div class="col">
                    <div class="card mb-grid">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="card-header-title">Program</div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('saveProgram')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label form-label">Nama Program MBKM</label>
                                <div class="col-sm-10">
                                <input type="text" name="nama_program" class="form-control" id="inputEmail3" placeholder="Program MBKM">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                </div>

            </div>
        </div>
</div>
@endsection