<div class="adminx-sidebar expand-hover push">
        <ul class="sidebar-nav">
          
  @if($authenticateUser->role == 'pengurus')

<li class="sidebar-nav-item">
            <a href="{{route('home')}}" class="sidebar-nav-link">
              <span class="sidebar-nav-icon">
                <i data-feather="home"></i>
              </span>
              <span class="sidebar-nav-name">
                Dashboard
              </span>
              <span class="sidebar-nav-end">

              </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#example" aria-expanded="false" aria-controls="example">
              <span class="sidebar-nav-icon">
                <i data-feather="pie-chart"></i>
              </span>
              <span class="sidebar-nav-name">
                Pengurus
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="example">
              <li class="sidebar-nav-item">
                <a href="{{route('pengurus_surat_ttd')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Vs
                  </span>
                  <span class="sidebar-nav-name">
                    Validasi SPTJM
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="{{route('pengurus_input_program')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Ip
                  </span>
                  <span class="sidebar-nav-name">
                    Input Program
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="{{route('pengurus_surat_pengakuan')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Vp
                  </span>
                  <span class="sidebar-nav-name">
                    Validasi Surat Pengakuan SKS
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="{{route('pengurus_upload_nilai_perkuliahan')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Np
                  </span>
                  <span class="sidebar-nav-name">
                    Upload Nilai Perkuliahan
                  </span>
                </a>
              </li>
            </ul>
          </li>
  @elseif($authenticateUser->role == 'prodi')

  <li class="sidebar-nav-item">
            <a href="{{route('home')}}" class="sidebar-nav-link">
              <span class="sidebar-nav-icon">
                <i data-feather="home"></i>
              </span>
              <span class="sidebar-nav-name">
                Dashboard
              </span>
              <span class="sidebar-nav-end">

              </span>
            </a>
          </li>

          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navTables" aria-expanded="false" aria-controls="navTables">
              <span class="sidebar-nav-icon">
                <i data-feather="align-justify"></i>
              </span>
              <span class="sidebar-nav-name">
                Prodi
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navTables">
              <li class="sidebar-nav-item">
                <a href="{{route('prodi_pendaftaran')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Vp
                  </span>
                  <span class="sidebar-nav-name">
                    Validasi Pendaftaran Prodi
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="{{route('prodi_input_matkul')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Im
                  </span>
                  <span class="sidebar-nav-name">
                    Input Matkul
                  </span>
                </a>
              </li>

              <li class="sidebar-nav-item">
                <a href="./layouts/tables_data.html" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    Da
                  </span>
                  <span class="sidebar-nav-name">
                    Data Tables
                  </span>
                </a>
              </li>
            </ul>
          </li>
  @else
          <li class="sidebar-nav-item">
            <a class="sidebar-nav-link collapsed" data-toggle="collapse" href="#navForms" aria-expanded="false" aria-controls="navForms">
              {{-- <span class="sidebar-nav-icon">
                <i data-feather="edit"></i>
              </span> --}}
              <span class="sidebar-nav-abbr">
                    M
                  </span>
              <span class="sidebar-nav-name">
                Mahasiswa
              </span>
              <span class="sidebar-nav-end">
                <i data-feather="chevron-right" class="nav-collapse-icon"></i>
              </span>
            </a>

            <ul class="sidebar-sub-nav collapse" id="navForms">
              <li class="sidebar-nav-item">

                <a href="{{route('dashboard_mahasiswa')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    DM
                  </span>
                  <span class="sidebar-nav-name">
                    Dashboard Mahasiswa
                  </span>
                </a>

                <a href="{{route('petunjuk_penggunaan')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    PP
                  </span>
                  <span class="sidebar-nav-name">
                    Petunjuk Penggunaan
                  </span>
                </a>

                <a href="{{route('form_pendaftaran')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    FP
                  </span>
                  <span class="sidebar-nav-name">
                    Form Pendaftaran
                  </span>
                </a>

                <a href="{{route('surat_pengakuan_sks')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    SPS
                  </span>
                  <span class="sidebar-nav-name">
                    Surat Pengakuan SKS
                  </span>
                </a>

                <a href="{{route('laporan_akhir_dan_nilai_total')}}" class="sidebar-nav-link">
                  <span class="sidebar-nav-abbr">
                    IL
                  </span>
                  <span class="sidebar-nav-name">
                    Input Nilai & Laporan Akhir
                  </span>
                </a>

              </li>
            </ul>
          </li>
  @endif

        </ul>
      </div>