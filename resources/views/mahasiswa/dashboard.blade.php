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
            <div >
              <div>
                <div class="card mb-grid">
                  
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-header-title">Tutorial Melakukan Pendaftaran MBKM</div>
                  </div>                
                  <div class="card-body collapse show" id="card1">                    
                    <div class="dashboard-content">
                        <h3>Tutorial Melakukan Pendaftaran MBKM</h3>
                    <p>1.   Silahkan klik Form Pendaftaran MBKM pada menu</p>
                    <p>2.   Setelah itu anda bisa mengisi form tersebut dan jika sudah terisi semua klik Daftar sekarang</p>
                    <p>3.   kemudian anda bisa klik lihat pengumuman untuk mengetahui apakan anda sudah diterima atau belum</p>
                    </div>
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection