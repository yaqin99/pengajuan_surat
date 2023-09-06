<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pesona </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link href="/assets/img/pamekasan.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('202fd5e3645191f0a99b', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel2');
    channel.bind('my-event2', function(data) {
      console.log(data);
      swal({
              title: `Surat Anda Sudah Selesai`,
              text: 'Mohon Untuk Segera Diambil',
              icon: 'success'
            }).then(() => {
              window.location.reload();
            })
      // alert(JSON.stringify(data));
    });
  </script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eStartup
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
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
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="jomblo()" id="belumMenikah">Surat Keterangan Belum Pernah Menikah</a></li>
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="usaha()" id="suratUsaha">Surat Keterangan Usaha</a></li>
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="skck()" id="skck">Surat Keterangan Berkelakuan Baik</a></li>
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="kehilangan()" id="kehilangan">Surat Keterangan Kehilangan</a></li>
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="kelahiran()" id="kelahiran">Surat Keterangan Kelahiran</a></li>
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="kematian()" id="kematian">Surat Keterangan Kematian</a></li>
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="domisiliPenduduk()" id="skdp">Surat Keterangan Domisili Penduduk</a></li>
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="domisiliUsaha()" id="skdu">Surat Keterangan Domisili Usaha</a></li>
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="pecahKk()" id="pecah">Surat Keterangan Pecah KK</a></li>
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="pindah()" id="pindah">Surat Keterangan Pindah Datang</a></li>
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="keluar()" id="keluar">Surat Keterangan Pindah Keluar</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    
    <div class="hero-container" data-aos="fade-in">
      <h1>Selamat Datang di Pesona</h1>
      <h2>Ajukan Surat Penting anda dengan Pesan Online Pelayanan</h2>
      <img src="/assets/img/hero-img.png" alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100">
      <a href="#daftarSurat" class="btn-get-started scrollto">List Surat</a>
      {{-- <div class="btns">
        <a href="#"><i class="fa fa-apple fa-3x"></i> App Store</a>
        <a href="#"><i class="fa fa-play fa-3x"></i> Google Play</a>
        <a href="#"><i class="fa fa-windows fa-3x"></i> windows</a>
      </div> --}}
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Get Started Section ======= -->
    

   

    <!-- ======= Features Section ======= -->


    <!-- ======= Screenshots Section ======= -->
   


    <section id="Panduan" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Panduan</h2>
          <p class="separator">Panduan penggunaan Aplikasi E - Certif</p>
        </div>

        <div class="screens-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="/assets/img/screen/ss1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/assets/img/screen/ss2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/assets/img/screen/ss3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/assets/img/screen/ss4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/assets/img/screen/ss5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/assets/img/screen/ss6.png" class="img-fluid" alt=""></div>
          
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section>
    <!-- End Screenshots Section -->


    <section id="daftarSurat" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Daftar Surat</h2>
          {{-- <p class="separator">Integer cursus bibendum augue ac cursus .</p> --}}
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/assets/img/svg/document.svg" alt="img">
              <h4 id="sktmSend">Surat Keterangan Tidak Mampu</h4>
              <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="sktmButton('Surat Keterangan Tidak Mampu')" id="sktmButton">Selengkapnya</a>
              {{-- <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p> --}}
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/assets/img/svg/document.svg" alt="img">
              <h4 id="domisiliSend">Surat Keterangan Domisili Penduduk</h4>
              <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="domisiliButton('Surat Keterangan Domisili Penduduk')" id="domisiliButton">Selengkapnya</a>
              {{-- <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p> --}}
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/assets/img/svg/document.svg" alt="img">
              <h4 id="domisiliSend">Surat Keterangan Domisili Usaha</h4>
              <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="domisiliUsahaButton('Surat Keterangan Domisili Usaha')" id="domisiliUsahaButton">Selengkapnya</a>
              {{-- <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p> --}}
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/assets/img/svg/document.svg" alt="img">
              <h4 id="umumSend">Surat Keterangan Umum</h4>
              <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="suratUmum('Surat Keterangan Umum')" id="umumButton">Selengkapnya</a>
              {{-- <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p> --}}
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/assets/img/svg/document.svg" alt="img">
              <h4 id="umumSend">Surat Keterangan Kehilangan</h4>
              <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="kehilanganButton('Surat Keterangan Kehilangan')" id="kehilanganButton">Selengkapnya</a>
              {{-- <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p> --}}
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/assets/img/svg/document.svg" alt="img">
              <h4 id="umumSend">Surat Keterangan Belum Pernah Menikah</h4>
              <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="belumButton('Surat Keterangan Belum Pernah Menikah')" id="belumNikahButton">Selengkapnya</a>
              {{-- <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p> --}}
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/assets/img/svg/document.svg" alt="img">
              <h4 id="umumSend">Surat Keterangan Usaha</h4>
              <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="usahaButton('Surat Keterangan Usaha')" id="usahaButton">Selengkapnya</a>
              {{-- <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p> --}}
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/assets/img/svg/document.svg" alt="img">
              <h4 id="umumSend">Surat Keterangan Berkelakuan Baik</h4>
              <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="skckButton('Surat Keterangan Berkelakuan Baik')" id="skckButton">Selengkapnya</a>
              {{-- <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p> --}}
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/assets/img/svg/document.svg" alt="img">
              <h4 id="umumSend">Surat Keterangan Kelahiran</h4>
              <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="kelahiranButton('Surat Keterangan Kelahiran')" id="kelahiranButton">Selengkapnya</a>
              {{-- <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p> --}}
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/assets/img/svg/document.svg" alt="img">
              <h4 id="umumSend">Surat Keterangan Kematian</h4>
              <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="kematianButton('Surat Keterangan Kematian')" id="kematianButton">Selengkapnya</a>
              {{-- <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p> --}}
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/assets/img/svg/document.svg" alt="img">
              <h4 id="umumSend">Surat Keterangan Pecah KK</h4>
              <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="pecah('Surat Keterangan Pecah KK')" id="pecahButton">Selengkapnya</a>
              {{-- <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p> --}}
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/assets/img/svg/document.svg" alt="img">
              <h4 id="umumSend">Surat Keterangan Pindah Datang </h4>
              <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="pindahDatang('Surat Keterangan Pindah Datang')" id="pindahDatangButton">Selengkapnya</a>
              {{-- <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p> --}}
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/assets/img/svg/document.svg" alt="img">
              <h4 id="umumSend">Surat Keterangan Pindah Keluar</h4>
              <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="pindahKeluar('Surat Keterangan Pindah Keluar')" id="pindahKeluarButton">Selengkapnya</a>
              {{-- <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p> --}}
            </div>
          </div>

         

         

        </div>
      </div>
    </section>
    <!-- End Features Section -->


  
   

   

    <!-- ======= Newsletter Section ======= -->
    <section id="newsletter" class="newsletter text-center">
      <div class="overlay padd-section">
        <div class="container" data-aos="zoom-in">

          {{-- <div class="row justify-content-center">
            <div class="col-md-9 col-lg-6">
              <form class="d-flex" method="POST" action="#">
                <input type="email" class="form-control " placeholder="Email Adress" name="email">
                <button type="submit" class="btn btn-default"><i class="bi bi-location-arrow"></i>Subscribe</button>
              </form>
            </div>
          </div>

          <ul class="list-unstyled">
            <li><a href="#"><i class="bi bi-facebook"></i></a></li>
            <li><a href="#"><i class="bi bi-twitter"></i></a></li>
            <li><a href="#"><i class="bi bi-instagram"></i></a></li>
            <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
          </ul> --}}

        </div>
      </div>
    </section><!-- End Newsletter Section -->

    <!-- ======= Contact Section ======= -->
    <section id="masukan" class="padd-section">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Masukan</h2>
          <p class="separator">Silahkan Berikan Kritik dan Saran Anda tentang Pesona Gladak Anyar</p>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>Jl. KH. Amin Jakfar<br>Kel. Pamekasan Kec. Pamekasan Kab. Jawa Timur</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <p>kelurahangladakanyar@gmail.com</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>+62 87859979032</p>
              </div>
            </div>

            <div class="social-links mb-5">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="/addKritik" method="POST" class="php-email-form">
                @csrf
                {{-- <div class="form-group">
                  <input type="text" name="nama" class="form-control" id="name" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div> --}}
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="topik" id="subject" placeholder="Topik" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="saran" rows="5" placeholder="Kritik dan Saran" required></textarea>
                </div>
                <div class="my-3">
                  
                  <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <div id="modal">
    @include('component.modals.modalFlexib')
    @include('component.modals.modalKeterangan')
    @include('component.modals.modalPengajuan')
    @include('sweetalert::alert')
    {{-- @if(Session::get('berhasil'))
    
    <div class="modal" tabindex="-1" id="modalNotif" >
      <div class="modal-dialog" >
        <div class="modal-content">
          <div class="modal-header bg-success">
            <h5 class="modal-title text-light fw-bolder "><strong>Notifikasi</strong></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="disNotif()" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="fw-bolder"><strong>{{ Session::get('berhasil') }}</strong></p>
          </div>
          
        </div>
      </div>
    </div>
  
				  @endif --}}

  </div>
  {{-- @if(Session::get('berhasil'))
  @dd('Ada')
  @include('component.modals.modalLogin')
	@endif --}}
  <!-- ======= Footer ======= -->
  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">

            <a class="navbar-brand" href="#">Pesona</a>
            <p>Pesan Online Pelayanan {{ '(Pesona)' }} adalah aplikasi pelayanan surat berbasih website yang berfungsi untuk mempermudah pengurusan surat - surat penting</p>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>About</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Contact</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Support</h4>

            <ul class="list-unstyled">
              <li><a href="#">faq</a></li>
              <li><a href="#">Editor help</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

        

      </div>
    </div>

    <div class="copyrights">
      <div class="container">
        <p>&copy; Copyrights Pesona Gladak Anyar. All rights reserved.</p>
        <div class="credits">
          <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
        -->
          Programed by <a href="#">Moh. Ainul Yaqin</a>
        </div>
      </div>
    </div>

   

  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  {{-- <script src="/assets/vendor/php-email-form/validate.js"></script> --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

  <!-- Template Main JS File -->
  <script  src="/assets/js/main.js"></script>
  <script  src="/assets/js/sktm.js"></script>
  <script >
   document.querySelector('#logoutForm').addEventListener('submit', function(e) {
      var form = this;
      
      e.preventDefault();
      
      swal({
          title: "Apakah Anda Yakin?",
          text: "Keluar Dari Halaman!",
          icon: "info",
          buttons: [
            'Batal',
            'Keluar'
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {
            swal({
              title: 'Log out!',
              text: 'Logout Berhasil, Semoga Hari Anda Menyenangkan',
              icon: 'success'
            }).then(function() {
              form.submit();
            });
          } else {
            swal("Batal", "Logout di Batalkan", "error");
          }
        });
    });
  const disNotif = () => {
    document.getElementById('modalNotif').style.display = 'none' ; 

  }

  let berhasil = '{{ Session::get('berhasil');}}';
  console.log(berhasil);
  if (berhasil == 'Pengajuan Anda Berhasil') {
    console.log('called');
    document.getElementById('modalNotif').style.display = 'block' ; 
    setTimeout(() => {
      disNotif()
    }, 1000);
  }

  
  // return \Session::get('timestamp');
 

  </script>
</body>

</html>