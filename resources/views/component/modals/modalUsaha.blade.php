<div class="modal fade" id="modalUsaha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Formulir Pengajuan Surat Keterangan Usaha</h1>
          <a style="cursor: pointer;" onclick="closeUsaha()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></a>
        </div>
        <form method="POST" id="form_input_usaha" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          
            <input type="text" name="nama_surat_usaha" id="nama_surat_usaha" hidden>
            <div class="mb-3">
              <label for="pengantar" class="form-label">Nama Lengkap</label>
              <input type="text"  class="form-control" name="nama_usaha" id="nama_usaha">
            </div>
            
            <div class="mb-3" >
              <label   class="form-label">Tempat Lahir</label>
              <input type="text"  class="form-control" name="tempat_lahir_usaha" id="tempat_lahir_usaha">
            </div>
            <div class="mb-3" >
              <label   class="form-label">Tanggal Lahir</label>
              <input type="date"  class="form-control" name="tanggal_lahir_usaha" id="tanggal_lahir_usaha">
            </div>
            <div class="mb-3" >
              <label  class="form-label">NIK</label>
              <input type="text"  class="form-control" name="nik_usaha" id="nik_usaha">
            </div>
            <div class="mb-3" >
              <label  class="form-label">Alamat</label>
              <input type="text"  class="form-control" name="alamat_usaha" id="alamat_usaha">
            </div>
            <div class="mb-3" >
              <label   class="form-label">Pekerjaan</label>
              <input type="text"  class="form-control" name="pekerjaan_usaha" id="pekerjaan_usaha">
            </div>
            <div class="mb-3" >
              <label   class="form-label">Agama</label>
              <input type="text"  class="form-control" name="agama_usaha" id="agama_usaha">
            </div>
            <div class="mb-3" >
              <label   class="form-label">Status Perkawinan</label>
              <input type="text"  class="form-control" name="status_perkawinan_usaha" id="status_perkawinan_usaha">
            </div>
            
            
            <div class="mb-3" >
              <label for="floatingTextarea2" class="form-label mb-2">Keterangan</label>
              <textarea class="form-control" name="keterangan_usaha"  required id="floatingTextarea2" placeholder="Berikan Keterangan tentang jenis usaha yang dimiliki serta alamat dari tempat usaha"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" onclick="moveUsaha({{Auth::user()->id}})" class="btn btn-warning" target="blank">Preview</button>
            <button type="submit" id="confirm_button" class="btn btn-success">Konfirmasi</button>
          </div>
        </form>
      </div>
    </div>
  </div>