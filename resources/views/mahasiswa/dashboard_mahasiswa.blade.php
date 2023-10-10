@extends('master')
@section('content')

<div class="adminx-content">
    <div class="adminx-main-content">
        <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb adminx-page-breadcrumb">
                    <li class="breadcrumb-item active  aria-current=" page"="">Dashboard</li>
                </ol>
            </nav>

            <div class="pb-3">
                <h1>Dashboard Mahasiswa</h1>
                <dd>Semangat! dan jangan lupa untuk selalu berusaha dan berdoa</dd>
            </div>

            <div>
                <div>
                    <div class="card mb-grid">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="card-header-title">Selamat datang di dashboard mahasiswa</div>
                        </div>
                        <div class="card-body collapse show" id="card1">
                            <div class="dashboard-content">
                                <table class="table">
    <thead>
        <tr>
            <th>Program</th>
            <th>Semester</th>
            <th>Status Kelulusan</th>
            <th>Surat Rekomendasi</th>
            <th>SPTJM</th>
            <th>Surat Pengakuan SKS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Program A</td>
            <td>6</td>
            <td>Lulus</td>
            <td><a href="#" class="btn btn-primary" download>Download</a></td>
            <td><a href="#" class="btn btn-primary" download>Download</a></td>
            <td><a href="#" class="btn btn-primary" download>Download</a></td>
        </tr>
        <tr>
            <td>Program B</td>
            <td>7</td>
            <td>Lulus</td>
            <td><a href="#" class="btn btn-primary" download>Download</a></td>
            <td><a href="#" class="btn btn-primary" download>Download</a></td>
            <td><a href="#" class="btn btn-primary" download>Download</a></td>
        </tr>
        <!-- Tambahkan baris lainnya sesuai kebutuhan -->
    </tbody>
</table>


                                <!-- Tambahkan tabel lain sesuai kebutuhan -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
