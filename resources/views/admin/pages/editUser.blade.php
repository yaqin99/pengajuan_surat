@extends('admin.home')
@section('main')
@include('admin.component.navbarUser')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Data User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Home</a></li>
          <li class="breadcrumb-item">Edit User</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

       
          <div class="card">
           
            <div class="card-body">
                <div class="d-flex justify-content-between">

                  <h5 class="card-title d-flex justify-content-center"></h5>
                  <div class="d-flex align-items-center" id="divCheckAll" >

                   
                  </div>
                </div>
                  
              <!-- Table with hoverable rows -->
              <form class="signup-form" method="POST" action="/editDataUser/{{ $data->id }}">
                @method('put')

                @csrf
                <div class="form-group mb-2">
                    <label for="modalRt" class="text-dark">Nama</label>
                    <input type="text" name="nama" class="form-control" id="modalNama" value="{{ $data->name }}">
                </div>
                <div class="form-group mb-2">
                    <label for="modalRt" class="text-dark">RT</label>
                    <input type="text" name="rt"  class="form-control" id="modalRt" value="{{ $data->rt }}">
                </div>
                <div class="form-group mb-2">
                    <label for="modalRw" class="text-dark">RW</label>
                    <input type="text" name="rw" class="form-control" id="modalRw" value="{{ $data->rw }}">
                </div>
                <div class="form-group mb-2">
                    <label for="modalAlamat" class="text-dark">Alamat</label>
                    <input type="text" name="alamat"  class="form-control" id="modalAlamat" value="{{ $data->alamat }}">
                </div>
                <div class="form-group mb-2">
                    <label for="modalNoHp" class="text-dark">Nomor Telepon</label>
                    <input type="number" name="noHp" class="form-control" id="modalNoHp" value="{{ $data->noHp }}">
                </div>
                <div class="form-group mb-2">
                    <label for="modalNik" class="text-dark">NIK</label>
                    <input type="text" name="nik" class="form-control" id="modalNik" value="{{ $data->nik }}">
                </div>
                <div class="form-group mb-4">
                    <label for="modalEmail" class="text-dark">Email</label>
                    <input type="email" name="email" class="form-control" id="modalEmail" value="{{ $data->email }}">
                </div>
                <div class="d-flex justify-content-end">
                  <button id="buttonEdit" type="submit" class="btn btn-warning">Update</button>
                </div>  
          </form>
              
              <!-- End Table with hoverable rows -->

       
              

            </div>
         

          </div>

       
        </div>
      </div>
    </section>
   
      
    @include('sweetalert::alert')

       
       
       

      
    
  </main>
@endsection