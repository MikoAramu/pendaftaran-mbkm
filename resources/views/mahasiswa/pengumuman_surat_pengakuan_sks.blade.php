@extends('master')
@section('content')

<div class="adminx-content">
        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard_mahasiswa')}}">Dashboard</a></li>                
                <li class="breadcrumb-item active  aria-current=" page"="">Surat Pengakuan SKS</li>
              </ol>
            </nav>

            <div class="pb-3">
                <h1>Surat Pengakuan SKS</h1>
                <dd>Silahkan cetak lalu beri tanda tangan kemudian upload</dd>
            </div>
            <div >
              <div>
                <div class="card mb-grid">                  
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-header-title">Surat Pengakuan SKS</div>
                  </div>
                   
                  
                  <div class="card-body collapse show" id="card1">    
                    
                <p><h3>Selamat anda sudah dapat melihat surat pengakuan SKS</h3><br>
                        Anda dapat mendownload surat pengakuan SKS <br> <a href="{{ route('cetaksuratrekomendasi') }}" class="btn btn-primary"> Cetak Surat Pengakuan SKS</a><br><br>

                        <form action="{{ route('updateSPTJM') }}" method="POST" enctype="multipart/form-data">
                            @csrf                            
                            <div class="form-group">
                            <label for="krs">Unggah Surat Pengakuan SKS Telah Mahasiswa Tandatangani</label>
                            <input type="file" name="krs" accept=".pdf"
                                class="form-control-file @error('krs') is-invalid @enderror"
                                id="krs">
                            @error('krs')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                            <button type="submit" class="btn btn-primary">Unggah</button>
                        </form>

                        <p><h3>Selamat surat pengakuan SKS anda sudah di tanda tangani pengurus</h3><br>
                         Anda dapat mendownload surat pengakuan SKS yang sudah ditanda tangani pengurus <br> <a href="{{ route('cetaksuratrekomendasi') }}" class="btn btn-primary"> Cetak Surat Pengakuan SKS</a><br><br>
                     
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection