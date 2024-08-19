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
  @include('component.header')
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
    @yield('main')
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

  let berhasil = '{{ Session::get('berhasil')}}';
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