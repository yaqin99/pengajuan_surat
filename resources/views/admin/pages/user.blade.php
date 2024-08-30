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

            <div class="card-body">
                <div class="d-flex justify-content-between">

                  <h5 class="card-title d-flex justify-content-center">List Akun Ketua RT</h5>
                  <div class="d-flex align-items-center" id="divCheckAll" >
                      <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="bi bi-plus-circle"></i> User</a>
                  </div>
                </div>
                  
              <!-- Table with hoverable rows -->
              <div class="table-responsive">
                <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Warga</th>
                    <th scope="col">RT</th>
                    <th scope="col">RW</th>
                    
                    <th scope="col">Alamat</th>
                   
                    <th scope="col">Nomer Telepon</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Hapus</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $syifa)
                    
                  <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td> {{ $syifa->name }}</td>
                    <td>{{$syifa->rt }}</td>
                    <td>{{$syifa->rw }}</td>
                  
                    <td>{{$syifa->alamat }}</td>
                 
                    <td>{{$syifa->noHp }}</td>
                    <td><a  href="/editUser/{{ $syifa->id }}"  class="btn btn-warning btn-flat" >
                      <i class="bi bi-pencil-square"></i>
                    </a> 
                    
                    <td>
                      
                      <form method="POST" action="/deleteUser/{{ $syifa->id }}" >
                        @csrf
                        <button type="submit" class="btn btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'><i class="bi bi-trash-fill"></i></button>
                       </form>
                    
                  </td>

                  </tr>
                  
                  @endforeach
                
                </tbody>
              </table>
              </div>
              
              <!-- End Table with hoverable rows -->

              
              <div class="d-flex justify-content-start">

                {{ $data->links() }}
                
                 
              </div>
              

            </div>
         
        </div>
          </div>

       
        </div>
      </div>
    </section>
   
      
    @include('sweetalert::alert')
    @include('admin.component.modalTambah')
       
       
       

      
    
  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
  <script src="/modalAssets/js/jquery.min.js"></script>

  <script type="text/javascript">
   
       $('.show_confirm').click(function(event) {
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: `Apakah Anda Yakin?`,
                text: "Menghapus Akun ",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                form.submit();
              }
            });
        });
    
        document.querySelector('#form1').addEventListener('submit', function(e) {
      var form = this;
      
      e.preventDefault();
      
      swal({
          title: "Apakah Anda Yakin?",
          text: "Keluar Dari Halaman Admin!",
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
    
  </script>
 


@endsection