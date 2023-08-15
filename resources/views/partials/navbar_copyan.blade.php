<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="/images/logo_gundar.png" alt="LOGO" style="width: 50px; height: 50px;" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Halaman utama</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Daftar akun</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success nav-link px-4 text-white" href="{{ route('login') }}">Masuk</a>
                    </li>
                @endguest
                @auth
                    <!-- Desktop Menu -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                            <div class="d-flex align-items-center">
                                {{-- C:\laragon\www\UserMBKM\storage\app\public\foto\1231231423.png --}}
                                <img src="/storage/app/public/foto/1231231423.png" alt="" class="rounded-circle mr-2 profile-picture" />
                                {{-- <img src="/images/user.png" alt="" class="rounded-circle mr-2 profile-picture" /> --}}
                                Hi, {{ Auth::user()->email }}
                            </div>
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Keluar akun
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
