@extends('master')
@section('content')

<div class="adminx-content">
        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            {{-- <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard_mahasiswa')}}">Dashboard</a></li>                
                <li class="breadcrumb-item"><a href="{{route('dashboard_mahasiswa')}}">Form Pendaftaran MBKM</a></li> 
                <li class="breadcrumb-item active  aria-current=" page"="">Pengumuman Pendaftaran MBKM</li>
              </ol>
            </nav>

            <div class="pb-3">
                <h1>Pengumuman Pendaftaran MBKM</h1>
                <dd>Cek status pendaftaran anda secara berkala</dd>
            </div>
            <div >
              <div>
                <div class="card mb-grid">                  
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-header-title">Pengumuman Pendaftaran MBKM</div>
                  </div> --}}

                  <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard_mahasiswa')}}">Dashboard</a></li>                
                <li class="breadcrumb-item"><a href="{{route('dashboard_mahasiswa')}}">Form Surat Pengakuan SKS</a></li> 
                <li class="breadcrumb-item active  aria-current=" page"="">Pengumuman Surat Pengakuan SKS</li>
              </ol>
            </nav>

            <div class="pb-3">
                <h1>Pengumuman Surat Pengakuan SKS</h1>
                <dd>Cek status anda secara berkala</dd>
            </div>
            <div >
              <div>
                {{-- <div class="card mb-grid">                  
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-header-title">Pengumuman Pendaftaran MBKM</div>
                  </div> --}}
                  <div class="card mb-grid">                  
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-header-title">Pengumuman Surat Pengakuan SKS</div>
                  </div>
                   
                  
                  <div class="card-body collapse show" id="card1">                        

                @if ($mahasiswa)
                    @if ($mahasiswa->status == 'Menunggu Validasi')
                        {{-- <p><h3>Menunggu Validasi Prodi dan Pengurus</h3></p> --}}
                        <p><h3>Menunggu Validasi Pengurus</h3></p>
                    @elseif ($mahasiswa->status == 'Tidak Lolos Validasi')
                        <p><h3>Maaf, Anda tidak lolos validasi</h3></p>
                    @elseif ($mahasiswa->status == 'Anda Tervalidasi Prodi')
                        {{-- <p><h3>Selamat, Anda telah tervalidasi oleh Prodi</h3></p> --}}
                        <p><h3>Selamat anda sudah tervalidasi Prodi tetapi anda masih harus menunggu validasi dari Pengurus</h3><br>
                        Anda dapat melihat dan mencetak surat Rekomendasi <br> <a href="{{ route('cetaksuratrekomendasi') }}" class="btn btn-primary"> Cetak Surat Rekomendasi</a> </p>
                        
                    {{-- @elseif ($mahasiswa->status == 'Anda Tervalidasi Prodi dan Pengurus')
                        <p><h3>Selamat Anda telah tervalidasi oleh Prodi dan Pengurus</h3></p>                        
                        Anda dapat mendownload surat Rekomendasi <br> <a href="{{ route('cetaksuratrekomendasi') }}" class="btn btn-primary"> Cetak Surat Rekomendasi</a><br><br>
                        Anda dapat mendownload SPTJM <br> <a href="{{ route('cetaksptjm') }}" class="btn btn-primary"> Cetak SPTJM</a></p><br><br>

                        <form action="{{ route('updateSPTJM') }}" method="POST" enctype="multipart/form-data">
                            @csrf                            
                            <div class="form-group">
                            <label for="krs">Unggah File PDF SPTJM yang Telah Anda Tandatangani:</</label>
                            <input type="file" name="krs" accept=".pdf"
                                class="form-control-file @error('krs') is-invalid @enderror"
                                id="krs">
                            @error('krs')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                            <button type="submit" class="btn btn-primary">Unggah</button>
                        </form> --}}

                        @elseif ($mahasiswa->status == 'Anda Tervalidasi Prodi dan Pengurus')
                        {{-- <p><h3>Selamat, Anda telah tervalidasi oleh Prodi dan Pengurus</h3></p> --}}
                        {{-- <p><h3>Selamat anda sudah tervalidasi Pengurus</h3><br>                         --}}
                        Anda dapat mendownload Surat Pengakuan SKS <br> <a href="{{ route('cetaksptjm') }}" class="btn btn-primary"> Cetak Surat Pengakuan SKS</a></p><br><br>

                        <form action="{{ route('updateSPTJM') }}" method="POST" enctype="multipart/form-data">
                            @csrf                            
                            <div class="form-group">
                            <label for="krs">Unggah File PDF Surat Pengakuan SKS yang Telah Anda Tandatangani:</</label>
                            <input type="file" name="krs" accept=".pdf"
                                class="form-control-file @error('krs') is-invalid @enderror"
                                id="krs">
                            @error('krs')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                            <button type="submit" class="btn btn-primary">Unggah</button>
                        </form>

                    @else
                        <p><h3>Status Pendaftaran tidak dikenali</h3></p>
                    @endif
                @else
                    <p><h3>Anda belum mengajukan pendaftaran</h3></p>
                @endif    

                {{-- <br><br><p><h3>Selamat SPTJM Anda Sudah Tervalidasi</h3><br>
                        Anda dapat melihat dan mencetak SPTJM yang sudah tervalidasi <br> 
                        <a href="{{ route('cetaksuratrekomendasi') }}" class="btn btn-primary"> 
                          Cetak SPTJM</a> </p> --}}

                          <br><br><p><h3>Selamat Surat Pengakuan SKS Anda Sudah Tervalidasi</h3><br>
                        Anda dapat melihat dan mencetak Surat Pengakuan SKS yang sudah tervalidasi <br> 
                        <a href="{{ route('cetaksuratrekomendasi') }}" class="btn btn-primary"> 
                          Cetak Surat Pengakuan SKS</a> </p>
                     
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection