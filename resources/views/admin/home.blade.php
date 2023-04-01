<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pesona | Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/pamekasan.png" rel="icon">
  <link href="/assets/img/pamekasan.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="/modalAssets/css/ionicons.min.css">
	<link rel="stylesheet" href="/modalAssets/css/style.css">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="/adminAssets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/adminAssets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/adminAssets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/adminAssets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/adminAssets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/adminAssets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/adminAssets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/adminAssets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/admin" class="logo d-flex align-items-center">
        <img src="/assets/img/pamekasan.png" alt="">
        <span class="d-none d-lg-block">Pesona </span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="GET" action="/admin">
        <input type="text" name="search" placeholder="Cari Surat .." title="Enter search keyword" value="{{ request('search') }}">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

 
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="/adminAssets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            
            <span class="d-none d-md-block dropdown-toggle ps-2">{{  Auth::guard('admin')->user()->name }}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{  Auth::guard('admin')->user()->name }}</h6>
              <span>Admin</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <form action="/logoutAdmin" method="post">
                  @csrf
                  <button onclick="return confirm('Apakah Anda Yakin ingin keluar halaman?')" class="dropdown-item" type="submit">Keluar</button>
                </form>
              </a>
            </li>

            
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/admin">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/admin">
              <i class="bi bi-circle"></i><span>Pengajuan Surat</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Tables Nav -->

   
    
   
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Pengajuan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pengajuan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

       
          <div class="card">
            <form action="/deletePengajuan" method="POST" name="formTable">
              @csrf
            <div class="card-body">
                <div class="d-flex justify-content-between">

                  <h5 class="card-title d-flex justify-content-center">List Pengajuan</h5>
                  <div class="d-flex align-items-center" id="divCheckAll" >

                    <div class="form-check">
                      <input class="form-check-input" id="checkAll" onclick="CheckAll(document.formTable.syifa)"  name="zaihan"  type="checkbox" style="display: none ;">
                      <label class="form-check-label" for="flexCheckChecked" id="checkAllLabel" style="display: none ;">
                        <strong>  
                           Pilih Semua
                        </strong>
                      </label>
                    
                    </div>
                  </div>
                </div>
                  
              <!-- Table with hoverable rows -->
              <div class="table-responsive">
                <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pengaju</th>
                    <th scope="col">Jenis Surat</th>
                    <th scope="col">Tanggal</th>
                    {{-- <th scope="col">Jam</th> --}}
                    {{-- <th scope="col">KTP</th>
                    <th scope="col">KK</th> --}}
                    <th scope="col">Keterangan</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $syifa)
                    
                  <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td><a href="#" id="change" class="user text-dark" data-bs-toggle="modal" data-bs-target="#syifaCantik" data-name="{{ $syifa->user->name }}"
                      data-rt="{{ $syifa->user->rt }}" data-rw="{{ $syifa->user->rw }}" data-alamat="{{ $syifa->user->alamat }}" data-email="{{ $syifa->user->email }}" data-nik="{{ $syifa->user->nik }}" data-noHp="{{ $syifa->user->noHp }}"> {{ $syifa->user->name }}</a></td>
                    <td><a href="#" id="jenisSurat" class="jenis text-dark" data-bs-toggle="modal" data-bs-target="#modalJenis" 
                      data-nama="{{ $syifa->jenis->nama_surat }}"
                      data-ktp="{{ $syifa->jenis->ktp }}" 
                      data-ktp2="{{ $syifa->jenis->ktp2 }}" 
                      data-ktp_pelapor="{{ $syifa->jenis->ktp_pelapor }}" 
                      data-ktp_saksi1="{{ $syifa->jenis->ktp_saksi1 }}" 
                      data-ktp_saksi2="{{ $syifa->jenis->ktp_saksi2 }}" 
                      data-kk="{{ $syifa->jenis->kk }}" 
                      data-kk2="{{ $syifa->jenis->kk2 }}" 
                      data-surat_nikah="{{ $syifa->jenis->surat_nikah }}" 
                      data-surat_nikah2="{{ $syifa->jenis->surat_nikah2 }}" 
                      data-surat_nikah3="{{ $syifa->jenis->surat_nikah3 }}" 
                      data-surat_keterangan="{{ $syifa->jenis->surat_keterangan }}" 
                      data-no_pelapor="{{ $syifa->jenis->no_pelapor }}" 
                      data-keterangan="{{ $syifa->jenis->keterangan }}"
                      
                      >{{$syifa->jenis->nama_surat }}</a></td>
                    <td>{{\Carbon\Carbon::parse($syifa->tanggal)->isoFormat(' dddd, D MMMM Y').' '.\Carbon\Carbon::parse($syifa->tanggal)->format('H:i:s').' WIB' }}</td>
                   
                    {{-- <td>{{\Carbon\Carbon::parse($syifa->tanggal)->format('H:i:s') }}</td> --}}
                    {{-- <td><a target="blank" class="btn btn-primary" href="{{ asset($syifa->jenis->ktp) }}">View</a></td> --}}
                    {{-- <td><a target="blank" class="btn btn-primary" href="{{ asset($syifa->jenis->kk) }}">View</a></td> --}}
                    <td>{{$syifa->jenis->keterangan }}</td>
                    <td>
                      <div class="form-check">
                      <input class="form-check-input" id="syifa" onclick="check()" name="ids[{{ $syifa->id }}]" type="checkbox" value="{{ $syifa->id }}" id="flexCheckDefault">
                       
                    </div>
                  </td>

                  </tr>
                  
                  @endforeach
                
                </tbody>
              </table>
              </div>
              
              <!-- End Table with hoverable rows -->

              <div class="d-flex justify-content-end">

            
             
             <button type="submit" class="btn btn-primary">Save</button>
           
              </div>
              <div class="d-flex justify-content-start">

                {{ $data->links() }}
                
                 
              </div>
              

            </div>
          </form>

          </div>

       
        </div>
      </div>
    </section>
   
      
  	@include('admin.component.modalUser')
  	@include('admin.component.modalJenis')
       
       
       
       

      
    
  </main><!-

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Pesona Gladak Anyar</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      {{-- Programed by <a href="https://bootstrapmade.com/">Moh. Ainul Yaqin</a> --}}
      Programed by <a >Moh. Ainul Yaqin</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/adminAssets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/adminAssets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/adminAssets/vendor/chart.js/chart.umd.js"></script>
  <script src="/adminAssets/vendor/echarts/echarts.min.js"></script>
  <script src="/adminAssets/vendor/quill/quill.min.js"></script>
  <script src="/adminAssets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/adminAssets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/adminAssets/vendor/php-email-form/validate.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="/modalAssets/js/jquery.min.js"></script>
  <script src="/modalAssets/js/popper.js"></script>
  <script src="/modalAssets/js/bootstrap.min.js"></script>
  <script src="/modalAssets/js/main.js"></script>

  <!-- Template Main JS File -->
  <script src="/adminAssets/js/main.js"></script>
  <script type="text/javascript">

function check() {
  let syifa = document.getElementById("syifa").checked ; 
   syifa = true;
  if (syifa == true ) {
    document.getElementById('checkAllLabel').style.display = 'block' ; 
    document.getElementById('checkAll').style.display = 'block' ; 
  }
  
}

function checkSemua(){  
  let cek = document.getElementById('checkAll').checked ;
  if (cek == true) {
    console.log('penampakan');
     document.getElementById("syifa").checked = true  ; 
   
  }
      
  }  
  
  function CheckAll(chk)
{
  let cek = document.getElementById('checkAll').checked ;
  if (cek == true) {
    for (i = 0; i < chk.length; i++)
	chk[i].checked = true ;
   
  }
  if (cek == false) {
    for (i = 0; i < chk.length; i++)
	chk[i].checked = false ;
  document.getElementById('checkAllLabel').style.display = 'none' ; 
    document.getElementById('checkAll').style.display = 'none' ; 
  }

 
}




    $(".user").click(function () {
      let name =  $(this).data('name');
      let rt =  $(this).data('rt');
      let rw =  $(this).data('rw');
      let alamat =  $(this).data('alamat');
      let email =  $(this).data('email');
      let nik =  $(this).data('nik');
      let noHp =  $(this).data('nohp');

      $("#modalNama").html(name);
      $("#modalAlamat").val(alamat);
      $("#modalRt").val(rt);
      $("#modalRw").val(rw);
      $("#modalNik").val(nik);
      $("#modalNoHp").val(noHp);
      $("#modalEmail").val(email);

});

      const makeBidan = () => {
      if (document.getElementById('kelahiranBidan') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const input = document.createElement("input");
      const a = document.createElement("a");
      const target = document.getElementById('divKeterangan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','kelahiranBidan');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_kelahiran');
      label.setAttribute('for' , 'modalKelahiran');
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_kelahiran');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'kelahiranButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);
      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_kelahiran').innerHTML = 'Bukti Asli Kelahiran dari Bidan';
      
     
    }

      const makeSuratNikah = () => {
      if (document.getElementById('suratNikah') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const input = document.createElement("input");
      const a = document.createElement("a");
      const target = document.getElementById('divKeterangan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','suratNikah');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_nikah');
      label.setAttribute('for' , 'modalNikah');
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_nikah');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'nikahButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);
      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_nikah').innerHTML = 'Foto Copy Surat Nikah';
      
     
    }

      const makeSuratRs = () => {
      if (document.getElementById('keteranganRs') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const input = document.createElement("input");
      const a = document.createElement("a");
      const target = document.getElementById('divKtp');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','keteranganRs');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_suratRs');
      label.setAttribute('for' , 'modalRs');
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_Rs');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'suratRsButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);
      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_suratRs').innerHTML = 'Surat Keterangan Dari Rumah Sakit';
      
     
    }
      const makeKtpSaksi1 = () => {
      if (document.getElementById('divSaksi1') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const input = document.createElement("input");
      const a = document.createElement("a");
      const target = document.getElementById('kelahiranBidan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divSaksi1');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_saksi1');
      label.setAttribute('for' , 'modalSaksi1');
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_saksi1');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'saksiButton1');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);
      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_saksi1').innerHTML = 'Foto Copy KTP Saksi 1';
      
     
    }

      const makeKtpSaksi1Kematian = () => {
      if (document.getElementById('divSaksi1') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const input = document.createElement("input");
      const a = document.createElement("a");
      const target = document.getElementById('divKeterangan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divSaksi1');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_saksi1');
      label.setAttribute('for' , 'modalSaksi1');
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_saksi1');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'saksiButton1');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);
      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_saksi1').innerHTML = 'Foto Copy KTP Saksi 1';
      
     
    }
      const makeKtpSaksi2 = () => {
      if (document.getElementById('divSaksi2') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const input = document.createElement("input");
      const a = document.createElement("a");
      const target = document.getElementById('kelahiranBidan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divSaksi2');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_saksi2');
      label.setAttribute('for' , 'modalSaksi2');
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_saksi2');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'saksiButton2');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);
      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_saksi2').innerHTML = 'Foto Copy KTP Saksi 2';
      
     
    }

      const makeKtpPelapor = () => {
      if (document.getElementById('divKtpPelapor') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const input = document.createElement("input");
      const a = document.createElement("a");
      const target = document.getElementById('divKeterangan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divKtpPelapor');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_pelapor');
      label.setAttribute('for' , 'modalSaksi2'); 
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_pelapor');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'pelaporButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);
      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_pelapor').innerHTML = 'Foto Copy KTP Pelapor';
      
     
    }

      const makeNoPelapor = () => {
      if (document.getElementById('divNoPelapor') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const input = document.createElement("input");
      const target = document.getElementById('divKeterangan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divNoPelapor');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_noPelapor');
      label.setAttribute('for' , 'modal_pelapor'); 
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_no');
      input.setAttribute('aria-describedby' , 'button-addon2');
      
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_noPelapor').innerHTML = 'Nomor Telepon Pelapor';
      
     
    }

      const makeKtpIbu = () => {
      if (document.getElementById('divKtpIbu') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const a = document.createElement("a");
      const input = document.createElement("input");
      const target = document.getElementById('divKk');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divKtpIbu');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_ktpIbu');
      label.setAttribute('for' , 'modalKtpIbu'); 
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_ktpIbu');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'ktpIbuButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);

      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_ktpIbu').innerHTML = 'Foto Copy KTP Ibu';
      
     
    }

      const makeKtpAsli = () => {
      if (document.getElementById('divKtpAsli') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const a = document.createElement("a");
      const input = document.createElement("input");
      const target = document.getElementById('divKtp');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divKtpAsli');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'labelKtpAsli');
      label.setAttribute('for' , 'modalKtpAsli'); 
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_ktpAsli');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'ktpAsliButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);

      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('labelKtpAsli').innerHTML = 'KTP Asli';
      
     
    }

      const makeKkOrtu = () => {
      if (document.getElementById('divKkOrtu') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const a = document.createElement("a");
      const input = document.createElement("input");
      const target = document.getElementById('divKk');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divKkOrtu');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_kkOrtu');
      label.setAttribute('for' , 'modalKkOrtu'); 
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_kkOrtu');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'kkOrtuButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);

      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_kkOrtu').innerHTML = 'Foto Copy atau KK Asli Orang Tua';
      
     
    }

      const makePolres = () => {
      if (document.getElementById('divPolres') !== null) {
        return ;
      }
      const div = document.createElement("div");
      const div2 = document.createElement("div");
      const label = document.createElement("label");
      const a = document.createElement("a");
      const input = document.createElement("input");
      const target = document.getElementById('divKeterangan');
      div.setAttribute('class','form-group mb-2');
      div.setAttribute('id','divPolres');
      label.setAttribute('class' , 'text-dark');
      label.setAttribute('id' , 'label_polres');
      label.setAttribute('for' , 'modalPolres'); 
      div2.setAttribute('class','input-group');
      input.setAttribute('type' , 'text');
      input.setAttribute('class' , 'form-control');
      input.setAttribute('id' , 'input_polres');
      input.setAttribute('aria-describedby' , 'button-addon2');
      a.setAttribute('target' , 'blank');
      a.setAttribute('class' , 'btn btn-outline-secondary');
      a.setAttribute('id' , 'polresButton');
      a.innerHTML = 'View';
      
      div.appendChild(label);
      div.appendChild(div2);
      div2.appendChild(input);
      div2.appendChild(a);

      const form = document.getElementById('form_input');
      form.appendChild(div);
      form.insertBefore(div , target);
      document.getElementById('label_polres').innerHTML = 'Surat Keterangan Kehilangan Dari Polsek atau Polres';
      
     
    }

    const dismissKelahiran = () => {
      if (document.getElementById("divKtpIbu") != null) {
        document.getElementById('labelKtp').innerHTML = 'KTP ' ;
        document.getElementById('labelKk').innerHTML = 'KK' ;
        document.getElementById("divKtpIbu").remove();
        document.getElementById("divKtpPelapor").remove();
        document.getElementById("divSaksi1").remove();
        document.getElementById("divSaksi2").remove();
        document.getElementById("kelahiranBidan").remove();
        document.getElementById("suratNikah").remove();
        document.getElementById("divNoPelapor").remove();
      } 
     
    }
    const dismissKelahilangan = () => {
      if (document.getElementById("divPolres") != null) {
        document.getElementById('labelKtp').innerHTML = 'KTP ' ;
        document.getElementById('labelKk').innerHTML = 'KK' ;
        document.getElementById("divPolres").remove();
       
      } 
     
    }

    const dismissKematian = () => {
      if (document.getElementById("keteranganRs") != null) {
        document.getElementById('labelKtp').innerHTML = 'KTP ' ;
        document.getElementById('labelKk').innerHTML = 'KK' ;

        document.getElementById("keteranganRs").remove();
        document.getElementById("divKtpAsli").remove();
        document.getElementById("divKkOrtu").remove();
        document.getElementById("divKtpPelapor").remove();
        document.getElementById("divSaksi1").remove();
        document.getElementById("divNoPelapor").remove();
      } 
     
    }

    $(".jenis").click(function () {
      dismissKelahiran();
      dismissKematian();
      dismissKelahilangan();
      let ktp =  $(this).data('ktp');
      let ktp2 =  $(this).data('ktp2');
      let ktp_pelapor =  $(this).data('ktp_pelapor');
      let ktp_saksi1 =  $(this).data('ktp_saksi1');
      let ktp_saksi2 =  $(this).data('ktp_saksi2');
      let kk =  $(this).data('kk');
      let kk2 =  $(this).data('kk2');
      let surat_nikah =  $(this).data('surat_nikah');
      let surat_nikah2 =  $(this).data('surat_nikah2');
      let surat_nikah3 =  $(this).data('surat_nikah3');
      let surat_keterangan =  $(this).data('surat_keterangan');
      let no_pelapor =  $(this).data('no_pelapor');
      let nama =  $(this).data('nama');
      let keterangan =  $(this).data('keterangan');
      
      
      $("#modalJenisNama").html(nama);
      $("#modalKTP").val(ktp);
      $("#modalKK").val(kk);
      $("#modalKeterangan").val(keterangan);
      
      $("#ktpButton").attr("href" , `{{ asset('/storage/ktp/${ktp}') }} ` );
      $("#kkButton").attr("href" , `{{ asset('/storage/kk/${kk}') }} ` );
      

      //   KELAHIRAN 
      if (nama === 'Surat Keterangan Kelahiran') {
        document.getElementById('labelKtp').innerHTML = 'Foto Copy Ktp Bapak' ;
        document.getElementById('labelKk').innerHTML = 'KK Asli' ;
        makeBidan();
        makeSuratNikah();
        makeKtpSaksi1();
        makeKtpSaksi2();
        makeKtpPelapor();
        makeNoPelapor();
        makeKtpIbu();
        $("#input_ktpIbu").val(ktp2);
        $("#ktpIbuButton").attr("href" , `{{ asset('/storage/ktpIbu/${ktp2}') }}` );

        $("#input_pelapor").val(ktp_pelapor);
        $("#pelaporButton").attr("href" , `{{ asset('/storage/ktpPelapor/${ktp_pelapor}') }}` );

        $("#input_saksi1").val(ktp_saksi1);
        $("#saksiButton1").attr("href" , `{{ asset('/storage/saksi1/${ktp_saksi1}') }}` );

        $("#input_saksi2").val(ktp_saksi2);
        $("#saksiButton2").attr("href" , `{{ asset('/storage/saksi2/${ktp_saksi2}') }}` );

        $("#input_kelahiran").val(surat_keterangan);
        $("#kelahiranButton").attr("href" , `{{ asset('/storage/kelahiranBidan/${surat_keterangan}') }}` );

        $("#input_nikah").val(surat_nikah);
        $("#nikahButton").attr("href" , `{{ asset('/storage/suratNikah/${surat_nikah}') }}` );

        $("#input_no").val(no_pelapor);
       

      }

      // KEMATIAN
      if (nama === 'Surat Keterangan Kematian') {
        document.getElementById('labelKtp').innerHTML = 'Foto Copy KTP' ;
        document.getElementById('labelKk').innerHTML = 'KK Asli' ;
        makeSuratRs();
        makeKtpAsli();
        makeKkOrtu();
        makeKtpSaksi1Kematian();
        makeKtpPelapor();
        makeNoPelapor();

        $("#input_Rs").val(surat_keterangan);
        $("#suratRsButton").attr("href" , `{{ asset('/storage/keteranganRs/${surat_keterangan}') }}` );

        $("#input_ktpAsli").val(ktp2);
        $("#ktpAsliButton").attr("href" , `{{ asset('/storage/ktpAsli/${ktp2}') }}` );

        $("#input_kkOrtu").val(kk2);
        $("#kkOrtuButton").attr("href" , `{{ asset('/storage/kkOrtu/${kk2}') }}` );

        $("#input_pelapor").val(ktp_pelapor);
        $("#pelaporButton").attr("href" , `{{ asset('/storage/ktpPelapor/${ktp_pelapor}') }}` );
        $("#input_saksi1").val(ktp_saksi1);
        $("#saksiButton1").attr("href" , `{{ asset('/storage/saksi1/${ktp_saksi1}') }}` );
        
        $("#input_no").val(no_pelapor);
       

      }

      if (nama === 'Surat Keterangan Kehilangan') {
        
       makePolres();

        $("#input_polres").val(surat_keterangan);
        $("#polresButton").attr("href" , `{{ asset('/storage/suratPolsek/${surat_keterangan}') }}` );

       
       

      }

});



</script>
</body>

</html>