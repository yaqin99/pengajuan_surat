@extends('layout')

@section('main')
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          {{-- <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav> --}}
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <form action="/user/editPp/{{Auth::user()->id}}" name="bibi" method="POST" enctype="multipart/form-data">
                    @csrf
                  
                    @method('put')
                  <div class="d-flex flex-column align-items-center text-center">
                    <img id="profil" src="{{$datas->berkas->foto_profil != null ? asset('/storage/fotoProfil/'.$datas->berkas->foto_profil) : 'https://bootdey.com/img/Content/avatar/avatar7.png'}} " alt="Admin" onclick="inputTrigger()" class="rounded-circle" width="150" style="cursor: pointer;">
                    <input type="file" name="fotoProfil" hidden id="fotoProfil" onchange="imgChange({{request('fotoProfil')}})">

                    <div class="mt-3">
                      <h4>{{$datas->name}}</h4>
                      <p class="text-muted font-size-sm">{{$datas->alamat}}</p>
                      <button type="submit" id="buttonProfil" hidden class="btn btn-outline-primary">Save</button>
                    </div>
                  </div>
                </form>

                </div>
              </div>
              {{-- <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                    <span class="text-secondary">https://bootdey.com</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                    <span class="text-secondary">@bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                </ul>
              </div> --}}
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
              <form action="/editUserProfil/{{Auth::user()->id}}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nama Lengkap</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <span id="nama_lengkap">{{$datas->name}}</span>
                      <input type="text" class="form-control" id="nama_lengkap_input" value="{{$datas->name}}" name="nama_lengkap" hidden="true">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Alamat</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <span id="alamat">{{$datas->alamat}}</span>
                      <input type="text" class="form-control" value="{{$datas->alamat}}" id="alamat_input" name="alamat" hidden="true">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nomer Handphone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <span id="no_hp">{{$datas->noHp}}</span>
                      <input type="text" class="form-control" value="{{$datas->noHp}}" id="no_hp_input" name="no_hp" hidden="true">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">RT</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <span id="rt">{{$datas->rt}}</span>
                      <input type="text" class="form-control" value="{{$datas->rt}}" id="rt_input" name="rt" hidden="true">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">RW</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <span id="rw">{{$datas->rw}}</span>
                      <input type="text" class="form-control" value="{{$datas->rw}}" id="rw_input" name="rw" hidden="true">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">NIK</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <span id="nik">{{$datas->nik}}</span>
                      <input type="text" class="form-control" value="{{$datas->nik}}" id="nik_input" name="nik" hidden="true">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <span id="email">{{$datas->email}}</span>
                      <input type="email" class="form-control" value="{{$datas->email}}" id="email_input" name="email" hidden="true">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Pekerjaan</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <span id="pekerjaan">{{$datas->pekerjaan}}</span>
                      <input type="text" class="form-control" value="{{$datas->pekerjaan}}" id="pekerjaan_input" name="pekerjaan" hidden="true">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Agama</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <span id="agama">{{$datas->agama}}</span>
                      <input type="text" class="form-control" value="{{$datas->agama}}" id="agama_input" name="agama" hidden="true">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Status Perkawinan</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <span id="status_perkawinan">{{$datas->status_perkawinan}}</span>
                      <input type="text" class="form-control" value="{{$datas->status_perkawinan}}" id="status_perkawinan_input" name="status_perkawinan" hidden="true">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tempat Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <span id="tempat_lahir">{{$datas->tempat_lahir}}</span>
                      <input type="text" class="form-control" value="{{$datas->tempat_lahir}}" id="tempat_lahir_input" name="tempat_lahir" hidden="true">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tanggal Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <span id="tanggal_lahir">{{$datas->tanggal_lahir}}</span>
                      <input type="date" class="form-control" value="{{$datas->tanggal_lahir}}" id="tanggal_lahir_input" name="tanggal_lahir" hidden="true">

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-primary" id="editButton" onclick="openEdit()">Edit</a>
                      <a class="btn btn-secondary" id="closeButton" hidden="true" onclick="closeEdit()">Batal</a>
                      <button class="btn btn-success" id="confirmButton" type="submit" hidden>Edit</button>
                    </div>
                  </div>
                </div>
              </form>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class=" mb-3 text-center">Berkas Pribadi</h6>
                      <div class="d-flex justify-content-center mb-4">
                        <div class="form-outline me-3" style="width: 14rem">
                          <label class="form-label" for="form1">KTP</label>
                        </div>
                        
                          <a  href="{{asset('/storage/ktp/'.$datas->berkas->ktp)}}" class="btn btn-warning">Lihat</a>
                            <button  type="button" onclick="openModal('Edit KTP' , {{$datas->berkas->id}},'ktp')" data-bs-toggle="modal" data-bs-target="#modalEditBerkas" class="btn btn-primary">Ubah</button>
                        
                    </div>
                      <div class="d-flex justify-content-center mb-4">
                        <div class="form-outline me-3" style="width: 14rem">
                          <label class="form-label" for="form1">KK</label>
                        </div>
                        <a  href="{{asset('/storage/kk/'.$datas->berkas->kk)}}" class="btn btn-warning">Lihat</a>
                        <button  type="button" onclick="openModal('Edit KK' , {{$datas->berkas->id}} , 'kk')" data-bs-toggle="modal" data-bs-target="#modalEditBerkas" class="btn btn-primary">Ubah</button>
                    </div>
                     
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class=" mb-3 text-center">Berkas Tambahan</h6>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="form-outline me-3" style="width: 14rem">
                          <label class="form-label" for="form1">KTP Ayah</label>
                        </div>
                        <a  href="{{asset('/storage/ktpAyah/'.$datas->berkas->ktp_ayah)}}" class="btn btn-warning">Lihat</a>
                        <button onclick="openModal('Edit KTP Ayah' , {{$datas->berkas->id}},'ktpAyah')" data-bs-toggle="modal" data-bs-target="#modalEditBerkas" type="button" class="btn btn-primary">Ubah</button>
                    </div>
                    <div class="d-flex justify-content-center mb-4">
                        <div class="form-outline me-3" style="width: 14rem">
                          <label class="form-label" for="form1">KTP Ibu</label>
                        </div>
                        <a  href="{{asset('/storage/ktpIbu/'.$datas->berkas->ktp_ibu)}}" class="btn btn-warning">Lihat</a>
                        <button onclick="openModal('Edit KTP Ibu' , {{$datas->berkas->id}},'ktpIbu')" data-bs-toggle="modal" data-bs-target="#modalEditBerkas" type="button" class="btn btn-primary">Ubah</button>
                    </div>
                  
                    <div class="d-flex justify-content-center mb-4">
                        <div class="form-outline me-3" style="width: 14rem">
                          <label class="form-label" for="form1">Surat Nikah</label>
                        </div>
                        <a  href="{{asset('/storage/suratNikah/'.$datas->berkas->surat_nikah)}}" class="btn btn-warning">Lihat</a>
                        <button onclick="openModal('Edit Surat Nikah' , {{$datas->berkas->id}} , 'suratNikah')" data-bs-toggle="modal" data-bs-target="#modalEditBerkas" type="button" class="btn btn-primary">Ubah</button>
                    </div>
                     
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>

        </div>
    </div>
    
    @include('component.modals.modalEditBerkas')
    <script>

      function openModal(judul,id , ket){
        document.getElementById('judulModalBerkas').innerHTML = judul ; 
        document.getElementById('formEditBerkas').action = '/editBerkas/'+id +'/' + ket ; 

      }


      function imgChange(data){
          let file = document.forms['bibi']['fotoProfil'].files[0];

          console.log(file);
          document.getElementById('profil').src =  URL.createObjectURL(file);
        }

        function inputTrigger(){
          document.getElementById('fotoProfil').click();
          document.getElementById('buttonProfil').hidden = false;

        }

        function openEdit(){
          document.getElementById('nama_lengkap').hidden =  true;
          document.getElementById('nama_lengkap_input').hidden =  false;
          document.getElementById('alamat').hidden =  true;
          document.getElementById('alamat_input').hidden =  false;
          document.getElementById('no_hp').hidden =  true;
          document.getElementById('no_hp_input').hidden =  false;
          document.getElementById('rt').hidden =  true;
          document.getElementById('rt_input').hidden =  false;
          document.getElementById('rw').hidden =  true;
          document.getElementById('rw_input').hidden =  false;
          document.getElementById('nik').hidden =  true;
          document.getElementById('nik_input').hidden =  false;
          document.getElementById('email').hidden =  true;
          document.getElementById('email_input').hidden =  false;
          document.getElementById('pekerjaan').hidden =  true;
          document.getElementById('pekerjaan_input').hidden =  false;
          document.getElementById('agama').hidden =  true;
          document.getElementById('agama_input').hidden =  false;
          document.getElementById('status_perkawinan').hidden =  true;
          document.getElementById('status_perkawinan_input').hidden =  false;
          document.getElementById('tempat_lahir').hidden =  true;
          document.getElementById('tempat_lahir_input').hidden =  false;
          document.getElementById('tanggal_lahir').hidden =  true;
          document.getElementById('tanggal_lahir_input').hidden =  false;
          document.getElementById('editButton').hidden =  true;
          document.getElementById('closeButton').hidden =  false;
          document.getElementById('confirmButton').hidden =  false;

        }
        function closeEdit(){
          document.getElementById('nama_lengkap').hidden =  false;
          document.getElementById('nama_lengkap_input').hidden =  true;
          document.getElementById('alamat').hidden =  false;
          document.getElementById('alamat_input').hidden =  true;
          document.getElementById('no_hp').hidden =  false;
          document.getElementById('no_hp_input').hidden =  true;
          document.getElementById('rt').hidden =  false;
          document.getElementById('rt_input').hidden =  true;
          document.getElementById('rw').hidden =  false;
          document.getElementById('rw_input').hidden =  true;
          document.getElementById('nik').hidden =  false;
          document.getElementById('nik_input').hidden =  true;
          document.getElementById('email').hidden =  false;
          document.getElementById('email_input').hidden =  true;
          document.getElementById('pekerjaan').hidden =  false;
          document.getElementById('pekerjaan_input').hidden =  true;
          document.getElementById('agama').hidden =  false;
          document.getElementById('agama_input').hidden =  true;
          document.getElementById('status_perkawinan').hidden =  false;
          document.getElementById('status_perkawinan_input').hidden =  true;
          document.getElementById('tempat_lahir').hidden =  false;
          document.getElementById('tempat_lahir_input').hidden =  true;
          document.getElementById('tanggal_lahir').hidden =  false;
          document.getElementById('tanggal_lahir_input').hidden =  true;
          document.getElementById('editButton').hidden =  false;
          document.getElementById('closeButton').hidden =  true;
          document.getElementById('confirmButton').hidden =  true;

        }
    </script>
@endsection