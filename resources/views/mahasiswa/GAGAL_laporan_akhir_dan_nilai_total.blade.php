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
                @if ($isRegisteredAndSubmitted)
                    <dd>Selamat! Anda sudah menginput nilai dan mengunggah laporan akhir.</dd>
                @elseif ($isRegistered)
                    <dd>Anda harus menginputkan nilai dan mengunggah laporan akhir.</dd>
                @else
                    <dd>Anda harus mendaftar terlebih dahulu.</dd>
                @endif
            </div>

                @if (!$isRegisteredAndSubmitted)
            <div>
                <div class="card mb-grid">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="card-header-title">Input Nilai Total dan Laporan Akhir</div>
                    </div>
                    <div class="card-body collapse show" id="card1">
                        @if ($isRegistered)                                                 
                     <form method="POST" action="{{ route('simpan_laporan_akhir_dan_nilai_total') }}" 
                    enctype="multipart/form-data">
                      @csrf
                        
                        <div class="form-group">
                            <label class="form-label" for="nilai_mbkm">Nilai Total</label>
                            <input type="text" name="nilai_mbkm"
                                class="form-control @error('nilai_mbkm') is-invalid @enderror" id="nilai_mbkm"
                                placeholder="Masukkan Nilai Total anda" pattern="[0-9]+(\.[0-9]+)?"
                                value="{{ old('nilai_mbkm') }}">
                            <small class="form-text text-muted">Gunakan titik sebagai pemisah desimal. 
                                contoh 3.41
                            </small>
                            @error('nilai_mbkm')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="file_laporan_akhir">Laporan Akhir</label>
                            <input type="file" name="file_laporan_akhir" accept=".pdf"
                                class="form-control-file @error('file_laporan_akhir') is-invalid @enderror"
                                id="file_laporan_akhir">
                                <small class="form-text text-muted">Ubah Nama Filenya Menjadi NPM anda,
                                  cth : 17119131.pdf
                            </small>
                            @error('file_laporan_akhir')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                                         
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    @else
                            <p>Anda harus mendaftar terlebih dahulu.</p>
                        @endif
                        @endif
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection