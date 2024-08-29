<div class="modal fade" id="modalKehilangan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Formulir Pengajuan Surat Keterangan Kehilangan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" id="form_input_kehilangan" name="form" enctype="multipart/form-data">
             <div class="modal-body">
          
            <input type="text" name="nama_surat_kehilangan" id="nama_surat_kehilangan" hidden>
            
            <div class="mb-3" >
              <label for="pengantar" class="form-label">Nama Lengkap</label>
              <input type="text"  class="form-control" name="nama_kehilangan" id="nama_kehilangan">
            </div>
            
            <div class="mb-3" >
              <label   class="form-label">Tempat Lahir</label>
              <input type="text"  class="form-control" name="tempat_lahir_kehilangan" id="tempat_lahir_kehilangan">
            </div>
            <div class="mb-3" >
              <label   class="form-label">Tanggal Lahir</label>
              <input type="date"  class="form-control" name="tanggal_lahir_kehilangan" id="tanggal_lahir_kehilangan">
            </div>
            <div class="mb-3" >
              <label  class="form-label">NIK</label>
              <input type="text"  class="form-control" name="nik_kehilangan" id="nik_kehilangan">
            </div>
            <div class="mb-3" >
              <label  class="form-label">Alamat</label>
              <input type="text"  class="form-control" name="alamat_kehilangan" id="alamat_kehilangan">
            </div>
            <div class="mb-3" >
              <label   class="form-label">Status Perkawinan</label>
              <input type="text"  class="form-control" name="status_perkawinan_kehilangan" id="status_perkawinan_kehilangan">
            </div>
            
            
            <div class="mb-3" >
              <label for="floatingTextarea2" class="form-label mb-2">Keterangan</label>
              <textarea class="form-control" name="keterangan_kehilangan"  id="floatingTextarea2" placeholder="Berikan Keterangan terkait barang yang hilang"></textarea>
            </div>
          </div>
          <div class="modal-footer">
          <button type="button" onclick="moveKehilangan({{Auth::user()->id}})" class="btn btn-warning" target="blank">Preview</button>
          <button type="submit" id="confirm_button" class="btn btn-success">Konfirmasi</button>
          </div>
          @csrf
        </form>
      </div>
    </div>
  </div>