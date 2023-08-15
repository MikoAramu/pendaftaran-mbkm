@extends('master')
@section('content')

<div class="adminx-content">
        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard_mahasiswa')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('form_pendaftaran')}}">Form Pendaftaran MBKM</a></li>
                <li class="breadcrumb-item active  aria-current=" page"="">Pengumuman</li>
              </ol>
            </nav>

            <div class="pb-3">              
              <h1>Pengumuman Pendaftaran</h1>              
                <dd>Silahkan status pendaftaran anda secara berkala</dd>
                <br><br>

                @if ($mahasiswa)
                    @if ($mahasiswa->status == 'Menunggu Validasi')
                        <p><h3>Menunggu Validasi Prodi dan Pengurus</h3></p>
                    @elseif ($mahasiswa->status == 'Tidak Lolos Validasi')
                        <p><h3>Maaf, Anda tidak lolos validasi</h3></p>
                    @elseif ($mahasiswa->status == 'Anda Tervalidasi Prodi')
                        {{-- <p><h3>Selamat, Anda telah tervalidasi oleh Prodi</h3></p> --}}
                        <p><h3>Selamat anda sudah tervalidasi Prodi tetapi anda masih harus menunggu validasi dari Pengurus</h3><br>
                        Anda dapat melihat dan mencetak surat Rekomendasi <br> <a href="{{ route('cetaksuratrekomendasi') }}" class="btn btn-primary"> Cetak Surat Rekomendasi</a> </p>
                        
                    @elseif ($mahasiswa->status == 'Anda Tervalidasi Prodi dan Pengurus')
                        {{-- <p><h3>Selamat, Anda telah tervalidasi oleh Prodi dan Pengurus</h3></p> --}}
                        <p><h3>Selamat anda sudah tervalidasi Prodi dan Pengurus</h3><br>
                        Anda dapat mendownload surat Rekomendasi <br> <a href="{{ route('cetaksuratrekomendasi') }}" class="btn btn-primary"> Cetak Surat Rekomendasi</a><br><br>
                        Anda dapat mendownload SPTJM <br> <a href="{{ route('cetaksptjm') }}" class="btn btn-primary"> Cetak SPTJM</a></p><br><br>

                        <form action="{{ route('updateSPTJM') }}" method="POST" enctype="multipart/form-data">
                            @csrf                            
                            <div class="form-group">
                            <label for="krs">Unggah File PDF SPTJM yang Telah Ditandatangani:</</label>
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
          </div>
        </div>
      </div>

@endsection