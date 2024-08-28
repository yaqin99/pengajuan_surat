<div class="modal fade" id="modalMasukan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close d-flex align-items-center justify-content-center" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" ><i class="bi bi-x-circle fa-2x"></i></span>
          </button>

        </div>
        <div class="modal-body p-4 py-5 p-md-5">
            <h3 class="text-center mb-3">Berikan Keterangan Terkait Penolakan Surat</h3>
            <form id="formMasukan" class="signup-form" method="POST">
              @csrf
              @method('put')
                
                <div class="form-group mb-2" id="divKeterangan">
                    <label for="modalMasukanText" class="text-dark">Masukan</label>
                    <textarea name="masukan" class="form-control" id="modalMasukanText"></textarea>
                </div>
                <div class="modal-footer">
                  <button type="submit" id="confirm_button" class="btn btn-success">Konfirmasi</button>
                </div>       
          
        </form>
        </div>
      </div>
    </div>
  </div>