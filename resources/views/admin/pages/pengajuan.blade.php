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
            <form action="/updatePengajuan" method="POST" name="formTable" id="formPengajuan">
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
                    <th scope="col">Nama Warga</th>
                    <th scope="col">Jenis Surat</th>
                    <th scope="col">Tanggal</th>
                    {{-- <th scope="col">Jam</th> --}}
                    <th scope="col">Keterangan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $bibi)
                    
                  <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td><a href="#" id="change" onclick="userShow({{$bibi->user}} , {{$bibi->user}})"  class="user text-dark" data-bs-toggle="modal" data-bs-target="#modalUser" 
                      data-name="{{ $bibi->user->name }}"
                      data-rt="{{ $bibi->user->rt }}"
                      data-rw="{{ $bibi->user->rw }}" 
                      data-alamat="{{ $bibi->user->alamat }}"
                      data-email="{{ $bibi->user->email }}" 
                      data-nik="{{ $bibi->user->nik }}" 
                      data-id="{{ $bibi->user->id }}" 
                      data-noHp="{{ $bibi->user->noHp }}">
                      
                      {{ $bibi->user->name }}</a></td>
                    <td><a href="" id="jenisSurat" class="jenis text-dark">{{$bibi->nama_surat }}</a></td>
                    <td>{{\Carbon\Carbon::parse($bibi->tanggal)->isoFormat(' dddd, D MMMM Y').' '.\Carbon\Carbon::parse($bibi->tanggal)->format('H:i:s').' WIB' }}</td>
                   
                    {{-- <td>{{\Carbon\Carbon::parse($bibi->tanggal)->format('H:i:s') }}</td> --}}
                    {{-- <td><a target="blank" class="btn btn-primary" href="{{ asset($bibi->jenis->ktp) }}">View</a></td> --}}
                    {{-- <td><a target="blank" class="btn btn-primary" href="{{ asset($bibi->jenis->kk) }}">View</a></td> --}}
                    <td>{{$bibi->keterangan }}</td>
                    <td><a href="" class="btn btn-warning" onclick="settingMasukan({{$bibi->id}})" data-bs-toggle="modal" data-bs-target="#modalMasukan"><i class="bi bi-envelope-slash-fill"></i></a></td>
                    <td>
                      <div class="form-check">
                      <input class="form-check-input" id="syifa" onclick="check()" name="ids[{{ $bibi->id }}]" type="checkbox" value="{{ $bibi->id }}" id="flexCheckDefault">
                       
                    </div>
                  </td>

                  </tr>
                  
                  @endforeach
                
                </tbody>
              </table>
              </div>
              
              <!-- End Table with hoverable rows -->

              <div class="d-flex justify-content-end">

            
             
             <button type="submit" class="btn btn-primary" >Konfirmasi</button>
           
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
   
    @include('admin.component.modalMasukan')    
    @include('sweetalert::alert')

       
       
       

      
    
  </main>
    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

  <script>

    function openModalMasukan(){
      $('#modalMasukan').modal('show');
    }

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