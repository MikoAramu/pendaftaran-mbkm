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
              <h1>Algoritma Pemrograman 2 </h1>
              <dd>Silahkan ubah nilai mahasiswa</dd>
            </div>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>No</th>
        <th>NPM</th>
        <th>Nama Mahasiswa</th>
        <th>Jurusan</th>
        <th>Semester</th>
        <th>Input Nilai</th>
        <th>Aksi</th>
    </tr>
</thead>
    <tbody>
        
        <tr>
          <td>1</td>
          <td>131119986</td>
          <td>M. John Doe</td>
          <td>Sistem Informasi</td>
          <td>Semester 6</td>
          <form class="" action="#" method="post">
          <td>
              <input type="number" name="nilai" value="">
              <input type="hidden" name="noinduk" value="">
              <input type="hidden" name="mapel" value="">
          </td>
          <td> <button type="submit" name="button" class="btn btn-primary">Simpan</button> </td>
        </form>
        </tr>
        
    </tbody>
</table>

@endsection