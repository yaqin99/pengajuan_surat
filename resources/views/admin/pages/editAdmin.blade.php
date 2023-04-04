@extends('admin.home')
@section('main')
@include('admin.component.navbarAdmin')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Data Admin</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Home</a></li>
          <li class="breadcrumb-item">Edit Admin</li>
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
              <form class="signup-form" method="POST" action="/editDataAdmin/{{ $data->id }}">
                @method('put')

                @csrf
                <div class="form-group mb-2">
                    <label for="modalRt" class="text-dark">Nama</label>
                    <input type="text" name="nama" class="form-control" id="modalNama" value="{{ $data->name }}">
                </div>
                <div class="form-group mb-2">
                    <label for="modalRt" class="text-dark">Email</label>
                    <input type="text" name="email"  class="form-control" id="modalRt" value="{{ $data->email }}">
                </div>
                <div class="form-group mb-2">
                    <label for="modalRw" class="text-dark">Username</label>
                    <input type="text" disabled name="username" class="form-control" id="modalRw" value="{{ $data->username }}">
                </div>
                <div class="form-group mb-4">
                    <label for="modalAlamat" class="text-dark">Password</label>
                    <input type="text" disabled name="password"  class="form-control" id="modalAlamat" value="{{ $data->password }}">
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