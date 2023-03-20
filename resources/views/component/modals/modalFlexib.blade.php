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
          <form method="POST" id="form_input" enctype="multipart/form-data">
            @csrf
            {{-- <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div> --}}
            <div class="mb-3">
              <label for="pengantar" class="form-label">Foto Copy KTP</label>
              <input type="file" name="ktp" class="form-control" id="pengantar" oninput="keterangan()" onchange="fileValidation()">
              <p><small id="fileAlert"></small></p>

            </div>
            <div class="mb-3">
              <label for="kk" class="form-label">Foto Copy KK</label>
              <input type="file" class="form-control" name="kk" id="kk" oninput="kartuKk()" onchange="kkValidation()">
              <p><small id="fileKk"></small></p>

            </div>
            <div class="mb-3">
              <label for="floatingTextarea2" class="form-label mb-2">Keterangan</label>
              <textarea class="form-control" name="keterangan"  id="floatingTextarea2" ></textarea>
            </div>
            {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
          </form>
        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
          <button type="submit" id="confirm_button" class="btn btn-success">Konfirmasi</button>
        </div>
      </div>
    </div>
  </div>