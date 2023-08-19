@extends('layouts.app')

@section('content')

    <div class="page-content page-home">

{{-- banner bergerak --}}
      <section class="store-carousel">
        <div class="container">
          <div class="row">
            <div class="col-lg-12" data-aos="zoom-in">
              <div
                id="storeCarousel"
                class="carousel slide"
                data-ride="carousel"
              >
                <ol class="carousel-indicators">
                  <li
                    data-target="#storeCarousel"
                    data-slide-to="0"
                    class="active"
                  ></li>
                  <li data-target="#storeCarousel" data-slide-to="1"></li>
                  <li data-target="#storeCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img                      
                      src="{{asset('asset-folder')}}/demo/img/gundar1.jpg"
                      class="d-block w-100"
                      alt="Carousel Image"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="{{asset('asset-folder')}}/demo/img/gundar1.jpg"
                      class="d-block w-100"
                      alt="Carousel Image"
                    />
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
{{-- akhir banner bergerak --}}
      
{{-- isi Ditengah --}}
      <section class="store-new-products" >
        <div class="container" style="margin-top: 50px;">
          <div class="row">
            <div class="col-12" data-aos="fade-up" >
              <h5 style="font-size: 20px; font-weight: bold;">Sudah tau apa itu Kampus Merdeka?</h5>
                <div class="text-center">
                    <img src="{{asset('asset-folder')}}/demo/img/kampus_merdeka.png" alt="Gambar Kampus Merdeka" style="width: 300px; height: auto;">
                </div>
                <div class="text-center">
                    <p style="text-align: justify; margin-top: 20px;">
                        Merdeka Belajar-Kampus Merdeka (MBKM) merupakan kebijakan Menteri Pendidikan 
                        dan Kebudayaan yang bertujuan mendorong mahasiswa untuk menguasai berbagai 
                        keilmuan yang berguna untuk memasuki dunia kerja. Kampus Merdeka memberikan 
                        kesempatan bagi mahasiswa untuk memilih mata kuliah yang akan mereka ambil. 
                        Kebijakan MBKM ini sesuai dengan Permendikbud Nomor 3 Tahun 2020 tentang Standar 
                        Nasional Pendidikan Tinggi.
                    </p>
                </div>
            </div>
          </div>
        </div>
      </section>
{{-- akhir isi ditengah --}}

    </div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
