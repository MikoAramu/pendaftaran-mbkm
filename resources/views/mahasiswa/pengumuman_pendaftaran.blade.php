@extends('master')
@section('content')

<div class="adminx-content">
    <div class="adminx-main-content">
        <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb adminx-page-breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard_mahasiswa')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('dashboard_mahasiswa')}}">Form Pendaftaran MBKM</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pengumuman Pendaftaran MBKM</li>
                </ol>
            </nav>

            <div class="pb-3">
                <h1>Pengumuman Pendaftaran MBKM</h1>
                <p>Cek status pendaftaran anda secara berkala</p>
            </div>

            <div>
                <div class="card mb-grid">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div class="card-header-title">Pengumuman Pendaftaran MBKM</div>
                    </div>

                    <div class="card-body collapse show" id="card1">
                        @if ($mahasiswa)
                            @if ($mahasiswa->status == 'Menunggu Validasi')
                                <p><h3>Menunggu Validasi Prodi dan Pengurus</h3></p>
                            @elseif ($mahasiswa->status == 'Tidak Lolos Validasi')
                                <p><h3>Maaf, Anda tidak lolos validasi</h3></p>
                            @elseif ($mahasiswa->status == 'Anda Tervalidasi Prodi')
                                <p><h3>Selamat anda sudah tervalidasi Prodi tetapi anda masih harus menunggu validasi dari Pengurus</h3><br>
                                Anda dapat melihat dan mencetak surat Rekomendasi <br> <a href="{{ route('cetaksuratrekomendasi') }}" class="btn btn-primary"> Cetak Surat Rekomendasi</a> </p>
                            @elseif ($mahasiswa->status == 'Anda Tervalidasi Prodi dan Pengurus')
                                <p><h3>Selamat Anda telah tervalidasi oleh Prodi dan Pengurus</h3></p>
                                Anda dapat mendownload surat Rekomendasi <br> <a href="{{ route('cetaksuratrekomendasi') }}" class="btn btn-primary"> Cetak Surat Rekomendasi</a><br><br>
                                Anda dapat mendownload SPTJM <br> <a href="{{ route('cetaksptjm') }}" class="btn btn-primary"> Cetak SPTJM</a></p><br><br>

                               
                                @if ($mahasiswa)
    @if ($mahasiswa->upload_sptjm_ttd_mahasiswa === null)
        <form action="{{ route('updateSPTJM') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id_mahasiswa" value="{{ $mahasiswa->id }}">
            
            <div class="form-group">
                <label for="upload_sptjm">Unggah File PDF Surat Pengakuan SKS:</label>
                <input type="file" name="upload_sptjm" accept=".pdf" class="form-control-file @error('upload_sptjm') is-invalid @enderror" id="upload_sptjm">
                @error('upload_sptjm')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Unggah</button>
        </form>

    @endif
@endif

                            @else
                                <p><h3>Status Pendaftaran tidak dikenali</h3></p>
                            @endif
                        @endif
                        @if ($mahasiswa)
                                @if ($mahasiswa->status_sptjm_ttd_pengurus == 'Menunggu Validasi')
                                <p><h3>Menunggu validasi untuk mendapatkan Surat Pengakuan SKS </h3></p>
                                @elseif ($mahasiswa->status_sptjm_ttd_pengurus == 'Tidak Valid')
                                <p><h3>Maaf, Anda tidak lolos validasi</h3></p>
                                @elseif ($mahasiswa->status_sptjm_ttd_pengurus == 'Sudah Valid')
                                <p><br><h3>Silahkan cetak Surat Pengakuan SKS yang sudah ditanda tangan pengurus</h3></p>
                                <a href="{{ Storage::url($mahasiswa->upload_surat_sks_ttd_mahasiswa) }}" target="_blank" class="btn btn-primary">Cetak surat pengakuan SKS</a>

                                 @endif                        
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
