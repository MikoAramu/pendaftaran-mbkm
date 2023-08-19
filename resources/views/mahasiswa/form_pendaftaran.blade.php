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

                    @if ($statusMahasiswaIsNull === null)
                                      
                    <form method="POST" action="{{ route('simpan_pendaftaran') }}" 
                    enctype="multipart/form-data">
                      @csrf                      
                        <div class="form-group">
                            <label class="form-label" for="nama">Nama Lengkap</label>
                            <input type="text" name="nama"
                                class="form-control @error('nama') is-invalid @enderror" id="nama"
                                placeholder="Masukkan nama anda" value="{{ old('nama') }}">
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="npm">NPM</label>
                            <input type="number" name="npm"
                                class="form-control @error('npm') is-invalid @enderror" id="npm"
                                placeholder="Masukkan NPM anda" value="{{ old('npm') }}">
                            @error('npm')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="kelas">Kelas</label>
                            <input type="text" name="kelas"
                                class="form-control @error('kelas') is-invalid @enderror" id="kelas"
                                placeholder="Masukkan kelas anda" value="{{ old('kelas') }}">
                            @error('kelas')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="jurusan">Jurusan</label>
                            <select name="jurusan_id" class="form-control @error('jurusan_id') is-invalid @enderror" id="jurusan">
                                <option value="" disabled selected>Pilih Jurusan</option>
                                @foreach ($jurusans as $jurusan)
                                    <option value="{{ $jurusan->id }}" {{ old('jurusan_id') == $jurusan->id ? 'selected' : '' }}>
                                        {{ $jurusan->nama_jurusan }}
                                    </option>
                                @endforeach
                            </select>
                            @error('jurusan_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="fakultas">Fakultas</label>
                            <select name="fakultas_id" class="form-control @error('fakultas_id') is-invalid @enderror" id="fakultas">
                                <option value="" disabled selected>Pilih Fakultas</option>
                                @foreach ($fakultas as $fakultasItem)
                                    <option value="{{ $fakultasItem->id }}" {{ old('fakultas_id') == $fakultasItem->id ? 'selected' : '' }}>
                                        {{ $fakultasItem->nama_fakultas }}
                                    </option>
                                @endforeach
                            </select>
                            @error('fakultas_id')
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

                        <div class="form-group">
                            <label class="form-label" for="nik">NIK</label>
                            <input type="number" name="nik"
                                class="form-control @error('nik') is-invalid @enderror" id="nik"
                                placeholder="Masukkan NIK anda" value="{{ old('nik') }}">
                            @error('nik')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="no_telepon">Nomor Telepon</label>
                            <input type="number" name="no_telepon"
                                class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon"
                                placeholder="Masukkan Nomot Telepon anda" value="{{ old('no_telepon') }}">
                            @error('no_telepon')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <legend class="col-form-legend form-label">Jenis Kelamin</legend>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="jenis_kelamin"
                                    class="custom-control-input" value="Laki-Laki" aria-required="true"
                                    @if(old('jenis_kelamin') == 'Laki-Laki') checked @endif>
                                <label class="custom-control-label" for="customRadio1">Laki-Laki</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="jenis_kelamin"
                                    class="custom-control-input" value="Perempuan" aria-required="true"
                                    @if(old('jenis_kelamin') == 'Perempuan') checked @endif>
                                <label class="custom-control-label" for="customRadio2">Perempuan</label>
                            </div>
                            @error('jenis_kelamin')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        
                        <div class="form-group">
                            <label class="form-label" for="alamat">Alamat</label>
                            <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                                id="alamat">{{ old('alamat') }}</textarea>
                            @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="kelurahan">Kelurahan</label>
                            <input type="text" class="form-control @error('kelurahan') is-invalid @enderror"
                                id="kelurahan" name="kelurahan" placeholder="Masukkan Kelurahan anda" value="{{ old('kelurahan') }}">
                            @error('kelurahan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="kecamatan">Kecamatan</label>
                            <input type="text" class="form-control @error('kecamatan') is-invalid @enderror"
                                id="kecamatan" name="kecamatan" placeholder="Masukkan Kecamatan anda" value="{{ old('kecamatan') }}">
                            @error('kecamatan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="kota_kabupaten">Kota/Kabupaten</label>
                            <input type="text" class="form-control @error('kota_kabupaten') is-invalid @enderror"
                                id="kota_kabupaten" name="kota_kabupaten" placeholder="Masukkan Kota/Kabupaten anda" value="{{ old('kota_kabupaten') }}">
                            @error('kota_kabupaten')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="provinsi">Provinsi</label>
                            <input type="text" class="form-control @error('provinsi') is-invalid @enderror"
                                id="provinsi" name="provinsi" placeholder="Masukkan Provinsi anda" value="{{ old('provinsi') }}">
                            @error('provinsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                                id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir anda" value="{{ old('tempat_lahir') }}">
                            @error('tempat_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir anda" value="{{ old('tanggal_lahir') }}">
                            @error('tanggal_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto 4 x 6</label>
                            <input type="file" name="foto" accept=".jpg, .jpeg, .png"
                                class="form-control-file @error('foto') is-invalid @enderror"
                                id="foto">
                            @error('foto')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="skrip_nilai">Skrip Nilai</label>
                            <input type="file" name="skrip_nilai_studentsite" accept=".pdf"
                                class="form-control-file @error('skrip_nilai_studentsite') is-invalid @enderror"
                                id="skrip_nilai">
                            @error('skrip_nilai_studentsite')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="krs">KRS</label>
                            <input type="file" name="krs" accept=".pdf"
                                class="form-control-file @error('krs') is-invalid @enderror"
                                id="krs">
                            @error('krs')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="ipk">IPK</label>
                            <input type="text" name="ipk"
                                class="form-control @error('ipk') is-invalid @enderror" id="ipk"
                                placeholder="Masukkan IPK anda" pattern="[0-9]+(\.[0-9]+)?"
                                value="{{ old('ipk') }}">
                            <small class="form-text text-muted">Gunakan titik sebagai pemisah desimal. 
                                contoh 3.41
                            </small>
                            @error('ipk')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="semester">Semester</label>
                            <select name="semester_id" class="form-control @error('semester_id') is-invalid @enderror" id="semester">
                                <option value="" disabled selected>Pilih Semester</option>
                                @foreach ($semesters as $semesterItem)
                                    <option value="{{ $semesterItem->id }}" {{ old('semester_id') == $semesterItem->id ? 'selected' : '' }}>
                                        {{ $semesterItem->semester }}
                                    </option>
                                @endforeach
                            </select>
                            @error('semester_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="angkatan">Tahun Angkatan</label>
                            <input type="number" name="angkatan"
                                class="form-control @error('angkatan') is-invalid @enderror"
                                id="angkatan" placeholder="Masukkan Tahun Angkatan anda" 
                                value="{{ old('angkatan') }}">
                            @error('angkatan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                                         
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form> 
                    
                    @else
                            <div class="alert alert-info">Anda sudah terdaftar.</div>                            
                    <div class="card-body collapse show" id="card1">    
                        <p>Silahkan lihat status pendaftaran anda disini</p>                    
                        <a href="{{ route('pengumuman_pendaftaran') }}" class="btn btn-primary">Lihat Pengumuman</a>                                                 
                  </div>
                            @endif

                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection