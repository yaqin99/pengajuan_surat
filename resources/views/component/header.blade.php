<header id="header" class="header header-hide">
  <div class="container">

    <div id="logo" class="pull-left">
      <h1><a href="/" class="scrollto">Pesona</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="#body"></assets/img2 src="/assets/img2/logo.png" alt="" title="" /></a>-->
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="/">Home</a></li>
        <li><a href="#panduan">Panduan</a></li>
        <li class="menu-has-children"><a>Daftar Surat</a>
          <ul>
            <li><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalSktm" onclick="sktm1({{$datas}} , {{Auth::user()->id}})" id="sktm" >Surat Keterangan Tidak Mampu</a></li>
            <li><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalUsaha" onclick="usaha({{$datas}} , {{Auth::user()->id}})" id="suratUsaha">Surat Keterangan Usaha</a></li>
            <li><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalKehilangan" onclick="kehilangan({{$datas}} , {{Auth::user()->id}})" id="kehilangan">Surat Keterangan Kehilangan</a></li>
          </ul>
        </li>
        <li><a class="menu-has-children" onclick="permohonan()" data-bs-toggle="modal" data-bs-target="#modalPengajuan" href="#" >List Permohonan</a></li>

        <li class="menu-has-children"><a href="javascript:void(0)">Profil</a>
          <ul>
            <li>
              <p class="dropdown-item text-dark" id="ubah" onclick="moveToProfil({{Auth::user()->id}})" style="cursor: pointer; color:white;">
                {{ Auth::user()->name }}
              </p>
              <form action="/logout" method="post" id="logoutForm">
                @csrf
                <button class="dropdown-item text-dark" id="ubah2" type="submit">Keluar</button>
              </form>

            </li>
          </ul>
        </li>
       
      </ul>
    </nav><!-- #nav-menu-container -->
  </div>
</header><!-- #header -->
