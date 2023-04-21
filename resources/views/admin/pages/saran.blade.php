@extends('admin.home')
@section('main')
@include('admin.component.navbarPengajuan')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Saran</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/saran">Home</a></li>
          <li class="breadcrumb-item">Data Saran</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        

        <div class="col-lg-12">

       
          <div class="card">

            <div class="card-body">
                <div class="d-flex justify-content-between">

                  <h5 class="card-title d-flex justify-content-center">List Saran Masuk</h5>
                  
                </div>
                  
              <!-- Table with hoverable rows -->
              <div class="table-responsive">
                <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Topik</th>                
                    <th scope="col">Saran</th>
                    <th scope="col">Hapus</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $syifa)
                    
                  <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td> {{ $syifa->nama }}</td>
                    <td>{{$syifa->email }}</td>
                    <td>{{$syifa->topik }}</td>
                  
                    <td>{{$syifa->saran }}</td>
                     
                    <td>
                        <form method="POST" action="/deleteKritik/{{ $syifa->id }}" >
                            @csrf
                            <button type="submit" class="btn btn-danger btn-flat kritikDelete" data-toggle="tooltip" title='Delete'><i class="bi bi-trash-fill"></i></button>
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
    @include('admin.component.modalTambahAdmin')
       
       
       

      
    
  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
  <script src="/modalAssets/js/jquery.min.js"></script>

  <script type="text/javascript">
   
       $('.kritikDelete').click(function(event) {
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: `Apakah Anda Yakin?`,
                text: "Menghapus Saran ",
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