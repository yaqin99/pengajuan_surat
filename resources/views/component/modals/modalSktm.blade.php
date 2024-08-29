<div class="modal fade" id="modalSktm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Formulir Pengajuan Surat Keterangan Tidak Mampu</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" id="form_input_sktm" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          
            <input type="text" name="nama_surat_sktm" id="nama_surat_sktm" hidden>
            <div class="mb-3">
              <label for="pengantar" class="form-label">Nama Lengkap</label>
              <input type="text"  class="form-control" name="nama_sktm" id="nama_sktm">
            </div>
            
            <div class="mb-3" >
              <label   class="form-label">Tempat Lahir</label>
              <input type="text"  class="form-control" name="tempat_lahir_sktm" id="tempat_lahir_sktm">
            </div>
            <div class="mb-3" >
              <label   class="form-label">Tanggal Lahir</label>
              <input type="date"  class="form-control" name="tanggal_lahir_sktm" id="tanggal_lahir_sktm">
            </div>
            <div class="mb-3" >
              <label  class="form-label">NIK</label>
              <input type="text"  class="form-control" name="nik_sktm" id="nik_sktm">
            </div>
            <div class="mb-3" >
              <label  class="form-label">Alamat</label>
              <input type="text"  class="form-control" name="alamat_sktm" id="alamat_sktm">
            </div>
            <div class="mb-3" >
              <label   class="form-label">Pekerjaan</label>
              <input type="text"  class="form-control" name="pekerjaan_sktm" id="pekerjaan_sktm">
            </div>
            <div class="mb-3" >
              <label   class="form-label">Agama</label>
              <input type="text"  class="form-control" name="agama_sktm" id="agama_sktm">
            </div>
            <div class="mb-3" >
              <label   class="form-label">Status Perkawinan</label>
              <input type="text"  class="form-control" name="status_perkawinan_sktm" id="status_perkawinan_sktm">
            </div>
            
            
            <div class="mb-3" >
              <label for="floatingTextarea2" class="form-label mb-2">Keterangan</label>
              <textarea class="form-control" name="keterangan_sktm"  id="floatingTextarea2" placeholder="Berikan Keterangan terkait alasan diajukannya surat keterangan ini"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" onclick="moveSktm({{Auth::user()->id}})" class="btn btn-warning" target="blank">Preview</button>
            <button type="submit" id="confirm_button" class="btn btn-success">Konfirmasi</button>
          </div>
        </form>
      </div>
    </div>
  </div>