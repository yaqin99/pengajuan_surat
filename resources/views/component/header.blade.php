<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div id="logo">
        <h1><a href="/"><span>PESONA</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="/assets/img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Pengajuan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              {{-- <li class="dropdown"><a href="#"><span>Surat Keterangan Tidak Mampu</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Persyaratan</a></li>
                  <li><a href="" >Form Pengajuan</a></li>
             
                </ul>
              </li> --}}
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="yoNdakMampu()" id="sktm" >Surat Keterangan Tidak Mampu</a></li>
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="umum()" id="suratUmum">Surat Keterangan Umum</a></li>
              {{-- <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="jomblo()" id="belumMenikah">Surat Keterangan Belum Pernah Menikah</a></li> --}}
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="usaha()" id="suratUsaha">Surat Keterangan Usaha</a></li>
              {{-- <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="skck()" id="skck">Surat Keterangan Berkelakuan Baik</a></li> --}}
              {{-- <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="kehilangan()" id="kehilangan">Surat Keterangan Kehilangan</a></li> --}}
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="kelahiran()" id="kelahiran">Surat Keterangan Kelahiran</a></li>
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="kematian()" id="kematian">Surat Keterangan Kematian</a></li>
              {{-- <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="domisiliPenduduk()" id="skdp">Surat Keterangan Domisili Penduduk</a></li> --}}
              {{-- <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="domisiliUsaha()" id="skdu">Surat Keterangan Domisili Usaha</a></li> --}}
              {{-- <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="pecahKk()" id="pecah">Surat Keterangan Pecah KK</a></li> --}}
              {{-- <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="pindah()" id="pindah">Surat Keterangan Pindah Datang</a></li> --}}
              {{-- <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="keluar()" id="keluar">Surat Keterangan Pindah Keluar</a></li> --}}
              {{-- <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib">Surat Keterangan Ahli Waris</a></li> --}}
              
              {{-- <li><a href="#">Surat </a></li> --}}
            </ul>
          </li>
          <li><a class="nav-link scrollto" data-bs-toggle="modal" data-bs-target="#modalPengajuan" href="#" >List Permohonan</a></li>
          <li><a class="nav-link scrollto" href="#Panduan">Panduan</a></li>
          <li><a class="nav-link scrollto" href="#masukan">Kritik & Saran</a></li>
          <li class="nav-item dropdown">
            <a  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profil <i class="bi bi-chevron-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li>
                <p class="dropdown-item">
                  {{ Auth::user()->name }}
                </p>
                <form action="/logout" method="post" id="logoutForm">
                  @csrf
                  <button class="dropdown-item" type="submit">Keluar</button>
                </form>

              </li>
             

              
            </ul>
          </li>
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
