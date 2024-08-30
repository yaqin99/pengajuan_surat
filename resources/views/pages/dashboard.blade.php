@extends('home')
@section('main')
    
<section id="hero" class="wow fadeIn">
  <div class="hero-container">
    <h1>Selamat Datang di Pesona</h1>
    <h2>Ajukan Surat Penting anda dengan Pesan Online Pelayanan</h2>
    <img src="/assets/img/hero-img.png" alt="Hero Imgs" data-aos="zoom-out" data-aos-delay="100">
    <a href="#daftarSurat" class="btn-get-started scrollto">List Surat</a>
    
  </div>
</section>

<section id="panduan" class="padd-section text-center wow fadeInUp">

  <div class="container">
    <div class="section-title text-center">
      <h2>Panduan</h2>
      <p class="separator">Panduan pengajuan surat</p>
    </div>
  </div>

  <div class="container">
    <div class="owl-carousel owl-theme">

      <div><img src="/assets/img/screen/ss1.png" alt="img"></div>
      <div><img src="/assets/img/screen/ss2.png" alt="img"></div>
      <div><img src="/assets/img/screen/ss3.png" alt="img"></div>
      <div><img src="/assets/img/screen/ss4.png" alt="img"></div>
      <div><img src="/assets/img/screen/ss5.png" alt="img"></div>
      <div><img src="/assets/img/screen/ss6.png" alt="img"></div>
     

    </div>
  </div>

</section>



<section id="daftarSurat" class="padd-section text-center wow fadeInUp">

  <div class="container">
    <div class="section-title text-center">
      <h2>Daftar Surat</h2>
      <p class="separator">Berikut ini adalah daftar surat yang kami layani secara online</p>
    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="/assets/img/svg/document.svg" alt="img" style="max-width: 40%; height:auto; margin-bottom:10px;">
          <h4 id="sktmSend">Surat Keterangan Tidak Mampu</h4>
          <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="sktmButton('Surat Keterangan Tidak Mampu')" id="sktmButton">Selengkapnya</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="/assets/img/svg/document.svg" alt="img" style="max-width: 40%; height:auto; margin-bottom:10px;">
          <h4 id="umumSend">Surat Keterangan Usaha</h4>
          <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="usahaButton('Surat Keterangan Usaha')" id="usahaButton">Selengkapnya</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="feature-block">
          <img src="/assets/img/svg/document.svg" alt="img" style="max-width: 40%; height:auto; margin-bottom:10px;">
          <h4 id="umumSend">Surat Keterangan Kehilangan</h4>
          <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="kehilanganButton('Surat Keterangan Hilang')" id="usahaButton">Selengkapnya</a>
        </div>
      </div>

      

    </div>
  </div>
</section>







<section id="newsletter" class="newsletter text-center wow fadeInUp">
  <div class="overlay padd-section">
    <div class="container">

      

    </div>
  </div>
</section>


<section id="kritik" class="padd-section wow fadeInUp">

  <div class="container">
    <div class="section-title text-center">
      <h2>Kritik dan Saran</h2>
      <p class="separator">Silahkan Berikan Kritik dan Saran Anda tentang Pesona Pamaroh</p>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-center">

      <div class="col-lg-3 col-md-4">

        <div class="info">
          <div>
            <i class="fa fa-map-marker"></i>
            <p>Jl. Campaka - Rubaru<br>Sumber Bindung, Pamoroh, Kec. Kadur, Kabupaten Pamekasan, Jawa Timur 69355</p>
          </div>

          <div class="email">
            <i class="fa fa-envelope"></i>
            <p>pamaroh@gmail.com</p>
          </div>

          <div>
            <i class="fa fa-phone"></i>
            <p>+62 82332382024</p>
          </div>
        </div>

        

      </div>

      <div class="col-lg-5 col-md-8">
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
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
</section>

  <div id="modal">
    @include('component.modals.modalSktm')
    @include('component.modals.modalKeterangan')
    @include('component.modals.modalPengajuan')
    @include('component.modals.modalUsaha')
    @include('component.modals.modalKehilangan')
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
  <script src="/js/print.js"></script>
@endsection