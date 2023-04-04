@extends('admin.home')
@section('main')
@include('admin.component.navbarPengajuan')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Pengajuan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Home</a></li>
          <li class="breadcrumb-item">Pengajuan</li>
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
                    <td><a href="#" id="change"  class="user text-dark" data-bs-toggle="modal" data-bs-target="#syifaCantik" 
                      data-name="{{ $syifa->user->name }}"
                      data-rt="{{ $syifa->user->rt }}"
                      data-rw="{{ $syifa->user->rw }}" 
                      data-alamat="{{ $syifa->user->alamat }}"
                      data-email="{{ $syifa->user->email }}" 
                      data-nik="{{ $syifa->user->nik }}" 
                      data-id="{{ $syifa->user->id }}" 
                      data-noHp="{{ $syifa->user->noHp }}">
                      
                      {{ $syifa->user->name }}</a></td>
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
   
      
  	@include('admin.component.modalJenis')
    @include('sweetalert::alert')

       
       
       

      
    
  </main>
    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

  <script>
     document.querySelector('#formPengajuan').addEventListener('submit', function(e) {
      var form = this;
      
      e.preventDefault();
      
      swal({
          title: "Apakah Anda Yakin?",
          text: "Surat Sudah Selesai!",
          icon: "info",
          buttons: [
            'Batal',
            'Konfirmasi'
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {
            swal({
              title: 'Surat Sedang Kami Kerjakan',
              text: 'Surat Dalam Proses',
              icon: 'success'
            }).then(function() {
              form.submit();
            });
          } else {
            swal("Batal", "Konfirmasi di Batalkan", "error");
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