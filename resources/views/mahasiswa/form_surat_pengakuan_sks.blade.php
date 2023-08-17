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
                <h1>Form Pendaftaran MBKM</h1>
                <dd>Silahkan isi form tersebut dengan sebenar benarnya dan tidak di singkat singkat</dd>
            </div>
            <div >
              <div>
                <div class="card mb-grid">                                    
                  <div class="card-body collapse show" id="card1">  

                    {{-- @if ($statusMahasiswaIsNull === null) --}}
                                      
                    <form method="POST" action="{{ route('simpan_pendaftaran') }}" 
                    enctype="multipart/form-data">
                      @csrf                      
                        <div class="form-group">
                            <label class="form-label" for="nama">Silahkan masukkaan bidang kampus merdeka</label>
                            <input type="text" name="nama"
                                class="form-control @error('nama') is-invalid @enderror" id="nama"
                                placeholder="Masukkaan bidang kampus merdeka" value="{{ old('nama') }}">
                                <small class="form-text text-muted">cth : front end, back end, dll
                            </small>
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="nama">Silahkan masukkan mitra yang anda ikuti</label>
                            <input type="text" name="nama"
                                class="form-control @error('nama') is-invalid @enderror" id="nama"
                                placeholder="Masukkan mitra yang anda ikuti" value="{{ old('nama') }}">
                                <small class="form-text text-muted">cth : PT. Maju Mundur 
                            </small>
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                                         
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form> 
                    
                    {{-- @else
                            <div class="alert alert-info">Anda sudah terdaftar.</div>                            
                    <div class="card-body collapse show" id="card1">    
                        <p>Silahkan lihat status pendaftaran anda disini</p>                    
                        <a href="{{ route('pengumuman_pendaftaran') }}" class="btn btn-primary">Lihat Pengumuman</a>                                                 
                  </div>
                            @endif --}}

                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection