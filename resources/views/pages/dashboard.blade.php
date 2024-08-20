@extends('layout')
@section('main')
    
 

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
        {{-- <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="/assets/img/svg/document.svg" alt="img">
            <h4 id="domisiliSend">Surat Keterangan Domisili Penduduk</h4>
            <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="domisiliButton('Surat Keterangan Domisili Penduduk')" id="domisiliButton">Selengkapnya</a>
            <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p>
          </div>
        </div> --}}
        {{-- <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="/assets/img/svg/document.svg" alt="img">
            <h4 id="domisiliSend">Surat Keterangan Domisili Usaha</h4>
            <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="domisiliUsahaButton('Surat Keterangan Domisili Usaha')" id="domisiliUsahaButton">Selengkapnya</a>
            <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p>
          </div>
        </div> --}}
        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="/assets/img/svg/document.svg" alt="img">
            <h4 id="umumSend">Surat Keterangan Umum</h4>
            <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="suratUmum('Surat Keterangan Umum')" id="umumButton">Selengkapnya</a>
            {{-- <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p> --}}
          </div>
        </div>
        {{-- <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="/assets/img/svg/document.svg" alt="img">
            <h4 id="umumSend">Surat Keterangan Kehilangan</h4>
            <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="kehilanganButton('Surat Keterangan Kehilangan')" id="kehilanganButton">Selengkapnya</a>
            <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p>
          </div>
        </div> --}}
        {{-- <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="/assets/img/svg/document.svg" alt="img">
            <h4 id="umumSend">Surat Keterangan Belum Pernah Menikah</h4>
            <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="belumButton('Surat Keterangan Belum Pernah Menikah')" id="belumNikahButton">Selengkapnya</a>
            <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p>
          </div>
        </div> --}}
        <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="/assets/img/svg/document.svg" alt="img">
            <h4 id="umumSend">Surat Keterangan Usaha</h4>
            <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="usahaButton('Surat Keterangan Usaha')" id="usahaButton">Selengkapnya</a>
            {{-- <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p> --}}
          </div>
        </div>
        {{-- <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="/assets/img/svg/document.svg" alt="img">
            <h4 id="umumSend">Surat Keterangan Berkelakuan Baik</h4>
            <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="skckButton('Surat Keterangan Berkelakuan Baik')" id="skckButton">Selengkapnya</a>
            <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p>
          </div>
        </div> --}}
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
        {{-- <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="/assets/img/svg/document.svg" alt="img">
            <h4 id="umumSend">Surat Keterangan Pecah KK</h4>
            <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="pecah('Surat Keterangan Pecah KK')" id="pecahButton">Selengkapnya</a>
            <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p>
          </div>
        </div> --}}
        {{-- <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="/assets/img/svg/document.svg" alt="img">
            <h4 id="umumSend">Surat Keterangan Pindah Datang </h4>
            <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="pindahDatang('Surat Keterangan Pindah Datang')" id="pindahDatangButton">Selengkapnya</a>
            <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p>
          </div>
        </div> --}}
        {{-- <div class="col-md-6 col-lg-3">
          <div class="feature-block">
            <img src="/assets/img/svg/document.svg" alt="img">
            <h4 id="umumSend">Surat Keterangan Pindah Keluar</h4>
            <a data-bs-toggle="modal" data-bs-target="#modalKeterangan" class="btn btn-warning" onclick="pindahKeluar('Surat Keterangan Pindah Keluar')" id="pindahKeluarButton">Selengkapnya</a>
            <p>Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan</p>
          </div>
        </div> --}}

       

       

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
@endsection