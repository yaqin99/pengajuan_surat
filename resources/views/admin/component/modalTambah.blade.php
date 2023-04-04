<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close d-flex align-items-center justify-content-center" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" ><i class="bi bi-x-circle fa-2x"></i></span>
          </button>

        </div>
        <div class="modal-body p-4 py-5 p-md-5">
            <h3 class="text-center mb-3">Tambah Akun Ketua RT</h3>
        
            <form class="signup-form" id="modalUser" action="/tambahUser" method="POST">
              @csrf
                <div class="form-group mb-2">
                    <label for="modalRt" class="text-dark">Nama Lengkap</label>
                    <input type="text" autocomplete="off" name="nama"  class="form-control" id="modalRt">
                </div>
                <div class="form-group mb-2">
                    <label for="modalRt" class="text-dark">RT</label>
                    <input type="text" name="rt" autocomplete="off" class="form-control" id="modalRt">
                </div>
                <div class="form-group mb-2">
                    <label for="modalRw" class="text-dark">RW</label>
                    <input type="text" name="rw" autocomplete="off" class="form-control" id="modalRw">
                </div>
                <div class="form-group mb-2">
                    <label for="modalAlamat" class="text-dark">Alamat</label>
                    <input type="text" name="alamat" autocomplete="off" class="form-control" id="modalAlamat">
                </div>
                <div class="form-group mb-2">
                    <label for="modalNoHp" class="text-dark">Nomor Telepon</label>
                    <input type="number" name="noHp" autocomplete="off" class="form-control" id="modalNoHp">
                </div>
                <div class="form-group mb-2">
                    <label for="modalNik" class="text-dark">NIK</label>
                    <input type="text" name="nik" autocomplete="off" class="form-control" id="modalNik">
                </div>
                <div class="form-group mb-4">
                    <label for="modalEmail" class="text-dark">Email</label>
                    <input type="email" name="email" autocomplete="off" class="form-control" id="modalEmail">
                </div>
                <div class="form-group mb-2">
                    <label for="modalUsername" class="text-dark">Username</label>
                    <input type="text" name="username" autocomplete="off" class="form-control" id="modalUsername">
                </div>
                <div class="form-group mb-4">
                    <label for="modalPassword" class="text-dark">Password</label>
                    <input type="text" name="password" autocomplete="off" class="form-control" id="modalPassword">
                </div>
                <div class="d-flex justify-content-end">
                  <button  class="btn btn-primary">Tambah</button>
                </div>  
          </form>
        </div>
       
      </div>
    </div>
  </div>