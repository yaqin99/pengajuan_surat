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

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

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
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib">Surat Keterangan Berkelakuan Baik</a></li>
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib">Surat Keterangan Kehilangan</a></li>
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="kelahiran()" id="kelahiran">Surat Keterangan Kelahiran</a></li>
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="kematian()" id="kematian">Surat Keterangan Kematian</a></li>
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="domisiliPenduduk()" id="skdp">Surat Keterangan Domisili Penduduk</a></li>
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib" onclick="domisiliUsaha()" id="skdu">Surat Keterangan Domisili Usaha</a></li>
              <li><a href="" data-bs-toggle="modal" data-bs-target="#flexib">Surat Keterangan Ahli Waris</a></li>
              
              {{-- <li><a href="#">Surat </a></li> --}}
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#about-us">Struktur Desa</a></li>
          <li><a class="nav-link scrollto" href="#Panduan">Panduan</a></li>
          <li class="nav-item dropdown">
            <a  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profil <i class="bi bi-chevron-down"></i>
            </a>
            <ul class="dropdown-menu">
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button onclick="return confirm('Apakah Anda Yakin ingin keluar halaman?')" class="dropdown-item" type="submit">Keluar</button>
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
    <section id="get-started" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">

          <h2>simple systeme fordiscount </h2>
          <p class="separator">Integer cursus bibendum augue ac cursus .</p>

        </div>
      </div>

      <div class="container">
        <div class="row">

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="feature-block">

              <img src="/assets/img/svg/cloud.svg" alt="img">
              <h4>introducing whatsapp</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <a href="#">read more</a>

            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="feature-block">

              <img src="/assets/img/svg/planet.svg" alt="img">
              <h4>user friendly interface</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <a href="#">read more</a>

            </div>
          </div>

          <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="feature-block">

              <img src="/assets/img/svg/asteroid.svg" alt="img">
              <h4>build the app everyone love</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <a href="#">read more</a>

            </div>
          </div>

        </div>
      </div>

    </section><!-- End Get Started Section -->

   

    <!-- ======= Features Section ======= -->
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
              <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="sktmButton()" id="sktmButton">Selengkapnya</a>
              {{-- <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p> --}}
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/assets/img/svg/document.svg" alt="img">
              <h4 id="domisiliSend">Surat Keterangan Domisili</h4>
              <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="domisiliButton()" id="domisiliButton">Selengkapnya</a>
              {{-- <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p> --}}
            </div>
          </div>

         

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/assets/img/svg/design-tool.svg" alt="img">
              <h4>easy to use</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/assets/img/svg/asteroid.svg" alt="img">
              <h4>Free Updates</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/assets/img/svg/asteroid.svg" alt="img">
              <h4>Free Updates</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/assets/img/svg/cloud-computing.svg" alt="img">
              <h4>App store support</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/assets/img/svg/pixel.svg" alt="img">
              <h4>Perfect Pixel</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="feature-block">
              <img src="/assets/img/svg/code.svg" alt="img">
              <h4>clean codes</h4>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Screenshots Section ======= -->
    <section id="Panduan" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Panduan</h2>
          <p class="separator">Panduan penggunaan Aplikasi E - Certif</p>
        </div>

        <div class="screens-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="/assets/img/screen/1.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/assets/img/screen/2.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/assets/img/screen/3.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/assets/img/screen/4.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/assets/img/screen/5.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/assets/img/screen/6.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/assets/img/screen/7.jpg" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="/assets/img/screen/8.jpg" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section><!-- End Screenshots Section -->

    <!-- ======= Video Section ======= -->
   <!-- End Video Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="padd-section text-center">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">

          <h2>Team Member</h2>
          <p class="separator">Integer cursus bibendum augue ac cursus .</p>
        </div>

        <div class="row">

          <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="team-block bottom">
              <img src="/assets/img/team/1.jpg" class="img-responsive" alt="img">
              <div class="team-content">
                <ul class="list-unstyled">
                  <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                  <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                  <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                </ul>
                <span>manager</span>
                <h4>Kimberly Tran</h4>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-block bottom">
              <img src="/assets/img/team/2.jpg" class="img-responsive" alt="img">
              <div class="team-content">
                <ul class="list-unstyled">
                  <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                  <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                  <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                </ul>
                <span>manager</span>
                <h4>Kimberly Tran</h4>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
            <div class="team-block bottom">
              <img src="/assets/img/team/3.jpg" class="img-responsive" alt="img">
              <div class="team-content">
                <ul class="list-unstyled">
                  <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                  <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                  <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                </ul>
                <span>manager</span>
                <h4>Kimberly Tran</h4>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
            <div class="team-block bottom">
              <img src="/assets/img/team/4.jpg" class="img-responsive" alt="img">
              <div class="team-content">
                <ul class="list-unstyled">
                  <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                  <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                  <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                </ul>
                <span>manager</span>
                <h4>Kimberly Tran</h4>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="padd-section text-center">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">

          <div class="col-md-8">

            <div class="testimonials-content">
              <div id="carousel-example-generic" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner" role="listbox">

                  <div class="carousel-item  active">
                    <div class="top-top">

                      <h2>Our Users Speack volumes us</h2>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries.</p>
                      <h4>Kimberly Tran<span>manager</span></h4>

                    </div>
                  </div>

                  <div class="carousel-item ">
                    <div class="top-top">

                      <h2>Our Users Speack volumes us</h2>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries.</p>
                      <h4>Henderson<span>manager</span></h4>

                    </div>
                  </div>

                  <div class="carousel-item ">
                    <div class="top-top">

                      <h2>Our Users Speack volumes us</h2>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. It has survived not only five centuries.</p>
                      <h4>David Spark<span>manager</span></h4>

                    </div>
                  </div>

                </div>

                <div class="btm-btm">

                  <ul class="list-unstyled carousel-indicators">
                    <li data-bs-target="#carousel-example-generic" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carousel-example-generic" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carousel-example-generic" data-bs-slide-to="2"></li>
                  </ul>

                </div>

              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Testimonials Section -->

   

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="padd-sectio">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">

          <h2>Latest posts</h2>
          <p class="separator">Integer cursus bibendum augue ac cursus .</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-md-6 col-lg-4">
            <div class="block-blog text-left">
              <a href="#"><img src="/assets/img/blog/blog-image-1.jpg" alt="img"></a>
              <div class="content-blog">
                <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
                <span>05, juin 2017</span>
                <a class="float-end readmore" href="#">read more</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="block-blog text-left">
              <a href="#"><img src="/assets/img/blog/blog-image-2.jpg" class="img-responsive" alt="img"></a>
              <div class="content-blog">
                <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
                <span>05, juin 2017</span>
                <a class="float-end readmore" href="#">read more</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="block-blog text-left">
              <a href="#"><img src="/assets/img/blog/blog-image-3.jpg" class="img-responsive" alt="img"></a>
              <div class="content-blog">
                <h4><a href="#">whats isthe difference between good and bat typography</a></h4>
                <span>05, juin 2017</span>
                <a class="float-end readmore" href="#">read more</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Blog Section -->

    <!-- ======= Newsletter Section ======= -->
    <section id="newsletter" class="newsletter text-center">
      <div class="overlay padd-section">
        <div class="container" data-aos="zoom-in">

          <div class="row justify-content-center">
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
          </ul>

        </div>
      </div>
    </section><!-- End Newsletter Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="padd-section">

      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Contact</h2>
          <p class="separator">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class="bi bi-phone"></i>
                <p>+1 5589 55488 55s</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
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

            <a class="navbar-brand" href="#">eStartup</a>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

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

            <h4>Abou Us</h4>

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

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>Abou Us</h4>

            <ul class="list-unstyled">
              <li><a href="#">About us</a></li>
              <li><a href="#">Features item</a></li>
              <li><a href="#">Live streaming</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>

          </div>
        </div>

      </div>
    </div>

    <div class="copyrights">
      <div class="container">
        <p>&copy; Copyrights eStartup. All rights reserved.</p>
        <div class="credits">
          <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
        -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Template Main JS File -->
  <script  src="/assets/js/main.js"></script>
  <script  src="/assets/js/sktm.js"></script>
  <script >
  
 

  </script>
</body>

</html>