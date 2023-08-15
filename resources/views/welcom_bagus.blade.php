@extends('layouts.app')

@section('title')
    Homepage
@endsection

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
                      src="/images/gundar1.jpg"
                      class="d-block w-100"
                      alt="Carousel Image"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="/images/gundar1.jpg"
                      class="d-block w-100"
                      alt="Carousel Image"
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="/images/gundar1.jpg"
                      class="d-block w-100"
                      alt="Carousel Image"
                    />
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
                    <img src="{{ asset('images/kampus_merdeka.png') }}" alt="Gambar Kampus Merdeka" style="width: 300px; height: auto;">
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

@endsection