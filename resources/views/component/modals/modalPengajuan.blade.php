<div class="modal fade" id="modalPengajuan" tabindex="-1" aria-labelledby="modalPengajuan" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Daftar Pengajuan Surat</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="table-responsive">
                <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis Surat</th>
                    <th scope="col">Waktu Pengajuan</th>
                    <th scope="col">Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $syifa)
                    
                  <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $syifa->jenis->nama_surat }}</td>
                    <td>{{\Carbon\Carbon::parse($syifa->tanggal)->isoFormat(' dddd, D MMMM Y').' '.\Carbon\Carbon::parse($syifa->tanggal)->format('H:i:s').' WIB' }}</td>
                    <td><a class="btn btn-primary">Menunggu</a></td>
                  </tr>
                  
                  @endforeach
                
                </tbody>
              </table>
              </div>
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <a class="btn btn-primary" data-bs-toggle="modal" id="tombolKeterangan">Ajukan</a>
        </div> --}}
      </div>
    </div>
  </div>