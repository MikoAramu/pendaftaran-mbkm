@extends('master')
@section('content')

<div class="adminx-content">
        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard_mahasiswa')}}">Dashboard</a></li>                
                <li class="breadcrumb-item"><a href="{{route('dashboard_mahasiswa')}}">Form Surat Pengakuan SKS</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pengumuman Surat Pengakuan SKS</li>
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
                                <p><h3>Anda dapat melihat dan mencetak surat pengakuan SKS</h3>
                                <a href="{{ route('cetaksuratrekomendasi') }}" class="btn btn-primary"> Lihat Surat Pengakuan SKS</a> </p>
                                  

                                @if ($mahasiswa)
                                @if ($mahasiswa->upload_surat_sks_ttd_mahasiswa === null)
                                    <form action="{{ route('update_surat_pengakuan_sks') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id_mahasiswa" value="{{ $mahasiswa->id }}">
                                        
                                        <div class="form-group">
                                            <label for="upload_surat_sks_ttd_mahasiswa">Unggah File PDF Surat Pengakuan SKS:</label>
                                            <input type="file" name="upload_surat_sks_ttd_mahasiswa" accept=".pdf" class="form-control-file @error('upload_surat_sks_ttd_mahasiswa') is-invalid @enderror" id="upload_surat_sks_ttd_mahasiswa">
                                            @error('upload_surat_sks_ttd_mahasiswa')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Unggah</button>
                                    </form>
                                @endif
                                @endif                                   
                                @if ($mahasiswa)
                                @if ($mahasiswa->status_surat_sks_ttd_pengurus === 'Menunggu Validasi')
                                <p><h3>Menunggu validasi untuk mendapatkan Surat Pengakuan SKS </h3></p>                                
                                @elseif ($mahasiswa->status_surat_sks_ttd_pengurus === 'Tidak Valid')
                                <p><h3>Maaf, Anda tidak lolos validasi</h3></p>
                                @elseif ($mahasiswa->status_surat_sks_ttd_pengurus === 'Sudah Valid')
                                <p><br><h3>Silahkan cetak Surat Pengakuan SKS yang sudah ditandatangan koordinator</h3></p>
                                <a href="{{ Storage::url($mahasiswa->upload_surat_sks_ttd_mahasiswa) }}" target="_blank" class="btn btn-primary">Lihat surat pengakuan SKS  yang sudah ditandatangan koordinator</a>

                                 @endif                        
                        @endif                   

                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection