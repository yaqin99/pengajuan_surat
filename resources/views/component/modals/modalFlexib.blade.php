<div class="modal fade" id="flexib" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="judulModal"></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="dismiss()" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {{-- <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-outline-secondary ">Persyaratan</button>
            <button type="button" class="btn btn-outline-secondary ">Formulir</button>
          </div> --}}
          <form method="POST" id="form_input" name="form" enctype="multipart/form-data">
            @csrf
            
            {{-- <div class="mb-3" id="divNama">
              <label for="pengantar" id="nama" class="form-label">Nama Lengkap</label>
              <input type="text"  class="form-control" name="nama" id="nama">
              <p><small id="fileAlert"></small></p>

            </div> --}}
            
            <div class="mb-3" id="divKeterangan">
              <label for="floatingTextarea2" class="form-label mb-2">Keterangan</label>
              <textarea class="form-control" name="keterangan"  id="floatingTextarea2" ></textarea>
            </div>
            {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
          </div>
          <div class="modal-footer">
            <button type="button" onclick="preview()" class="btn btn-warning" target="blank">Preview</button>
            <button type="submit" id="confirm_button" class="btn btn-success">Konfirmasi</button>
          </div>
        </form>
      </div>
    </div>
  </div>