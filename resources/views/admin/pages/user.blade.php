@extends('admin.home')
@section('main')
@include('admin.component.navbarUser')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Ketua RT</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/user">Home</a></li>
          <li class="breadcrumb-item">Data RT</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

       
          <div class="card">
            <form action="/deletePengajuan" method="POST" name="formTable" id="formPengajuan">
              @csrf
            <div class="card-body">
                <div class="d-flex justify-content-between">

                  <h5 class="card-title d-flex justify-content-center">List Akun Ketua RT</h5>
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
                    <th scope="col">Nama Ketua RT</th>
                    <th scope="col">RT</th>
                    <th scope="col">RW</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomer Telepon</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $syifa)
                    
                  <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{$syifa->name }}</td>
                    <td>{{$syifa->rt }}</td>
                    <td>{{$syifa->rw }}</td>
                    <td>{{$syifa->username }}</td>
                    <td>{{ $syifa->password }}</td>
                    <td>{{$syifa->alamat }}</td>
                    <td>{{$syifa->nik }}</td>
                    <td>{{$syifa->email }}</td>
                    <td>{{$syifa->noHp }}</td>
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

            
             
             <button type="submit" class="btn btn-primary" >Save</button>
           
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
    @include('sweetalert::alert')

       
       
       

      
    
  </main>
@endsection