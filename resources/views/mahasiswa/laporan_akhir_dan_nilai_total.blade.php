@extends('master')
@section('content')

<div class="adminx-content">
        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard_mahasiswa')}}">Dashboard</a></li>                
                <li class="breadcrumb-item active  aria-current=" page"="">Form Pendaftaran MBKM</li>
              </ol>
            </nav>

            <div class="pb-3">
                <h1>Laporan akhir dan nilai total</h1>
                <dd>Silahkan input total nilai anda beserta laporan akhirnya</dd>
            </div>
            <div >
              <div>
                <div class="card mb-grid">
                  
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-header-title">Input Nilai Total dan Laporan Akhir</div>
                  </div>                
                  <div class="card-body collapse show" id="card1">                    
                    <form method="POST" action="{{ route('simpan_pendaftaran') }}" 
                    enctype="multipart/form-data">
                      @csrf
                        
                        <div class="form-group">
                            <label class="form-label" for="ipk">Nilai Total</label>
                            <input type="text" name="ipk"
                                class="form-control @error('ipk') is-invalid @enderror" id="ipk"
                                placeholder="Masukkan Nilai Total anda" pattern="[0-9]+(\.[0-9]+)?"
                                value="{{ old('ipk') }}">
                            <small class="form-text text-muted">Gunakan titik sebagai pemisah desimal. 
                                contoh 3.41
                            </small>
                            @error('ipk')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="krs">Laporan Akhir</label>
                            <input type="file" name="krs" accept=".pdf"
                                class="form-control-file @error('krs') is-invalid @enderror"
                                id="krs">
                            @error('krs')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                                         
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection