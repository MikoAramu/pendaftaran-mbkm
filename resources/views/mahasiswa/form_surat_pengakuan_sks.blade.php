@extends('master')
@section('content')

<div class="adminx-content">
        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard_mahasiswa')}}">Dashboard</a></li>                
                <li class="breadcrumb-item active  aria-current=" page"="">Form Surat Pengakuan SKS</li>
              </ol>
            </nav>

            <div class="pb-3">
                <h1>Form Surat Pengakuan SKS</h1>
                <dd>Silahkan isi form tersebut dengan sebenar benarnya sesuai dengan petunjuk</dd>
            </div>
            <div >
              <div>
                <div class="card mb-grid">                                    
                  <div class="card-body collapse show" id="card1">  

                    @if ($bidang_mbkm === null)
                       @if ($mahasiswa)                       
                    <form method="POST" action="{{ route('update_mitra_bidang') }}"
                          enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_mahasiswa" value="{{ $mahasiswa->id }}"> <!-- Tambahkan field ini -->
                        <div class="form-group">
                            <label class="form-label" for="mitra">Silahkan masukkan mitra yang anda ikuti</label>
                            <input type="text" name="mitra" class="form-control @error('mitra') is-invalid @enderror" id="mitra"
                                placeholder="Masukkan mitra yang anda ikuti" value="{{ old('mitra', $mahasiswa->mitra_mbkm) }}">
                            <small class="form-text text-muted">cth : PT. Maju Mundur</small>
                            @error('mitra')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="bidang">Silahkan masukkan bidang kampus merdeka</label>
                            <input type="text" name="bidang" class="form-control @error('bidang') is-invalid @enderror" id="bidang"
                                placeholder="Masukkan bidang kampus merdeka" value="{{ old('bidang', $mahasiswa->bidang_mbkm) }}">
                            <small class="form-text text-muted">cth : front end, back end, dll</small>
                            @error('bidang')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- <div class="form-group">
                            <label class="form-label" for="program">Program MBKM</label>
                            <select name="program_id" class="form-control @error('program_id') is-invalid @enderror" id="program">
                                <option value="" disabled selected>Pilih Program MBKM</option>
                                @foreach ($programs as $program)
                                    <option value="{{ $program->id }}" {{ old('program_id') == $program->id ? 'selected' : '' }}>
                                        {{ $program->nama_program }}
                                    </option>
                                @endforeach
                            </select>
                            @error('program_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div> --}}

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                @else
                    <p>Silahkan daftar terlebih dahulu di menu form pendaftaran</p>
                @endif

                    @else
                            <div class="alert alert-info">Anda sudah terdaftar.</div>                            
                    <div class="card-body collapse show" id="card1">    
                        <p>Silahkan lihat status pendaftaran anda disini</p>                    
                        <a href="{{ route('pengumuman_surat_pengakuan_sks') }}" class="btn btn-primary">Lihat Pengumuman</a>                                                 
                  </div>
                            @endif

                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection