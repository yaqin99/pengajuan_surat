<div class="modal fade" id="modalEditBerkas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="judulModalBerkas"></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="dismiss()" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form method="POST" id="formEditBerkas" name="form" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
              <label for="berkas" id="labelBerkas" class="form-label"></label>
              <input type="file" id="berkas" name="berkas" class="form-control">
              <p><small id="fileAlert"></small></p>

           
            {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
          </div>
          <div class="modal-footer">
            {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
            <button type="submit" id="confirm_button" class="btn btn-success">Konfirmasi</button>
          </div>
        </form>
      </div>
    </div>
  </div>