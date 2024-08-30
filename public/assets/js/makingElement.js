function moveToProfil(id){
  window.location.href = "/profil/"+id;

}

function sktm1 (data , id){
  $('#modalSktm').modal('show');

  
  document.getElementById('nama_sktm').value = data.name ; 
  document.getElementById('tempat_lahir_sktm').value = data.tempat_lahir ; 
  document.getElementById('tanggal_lahir_sktm').value = data.tanggal_lahir ; 
  document.getElementById('nik_sktm').value = data.nik ; 
  document.getElementById('pekerjaan_sktm').value = data.pekerjaan ; 
  document.getElementById('status_perkawinan_sktm').value = data.status_perkawinan ; 
  document.getElementById('agama_sktm').value = data.agama ; 
  document.getElementById('alamat_sktm').value = data.alamat ; 
  document.getElementById('nama_surat_sktm').value = "Surat Keterangan Tidak Mampu" ; 
  document.getElementById("form_input_sktm").setAttribute('action' , '/addPengajuan/'+id);

}

function permohonan(){
  $('#modalPengajuan').modal('show');

}
function closePermohonan(){
  $('#modalPengajuan').modal('hide');

}
function closeSktm(){
  $('#modalSktm').modal('hide');

}


function usaha (data , id){
  $('#modalUsaha').modal('show');

  document.getElementById('nama_usaha').value = data.name ; 
  document.getElementById('tempat_lahir_usaha').value = data.tempat_lahir ; 
  document.getElementById('tanggal_lahir_usaha').value = data.tanggal_lahir ; 
  document.getElementById('nik_usaha').value = data.nik ; 
  document.getElementById('pekerjaan_usaha').value = data.pekerjaan ; 
  document.getElementById('status_perkawinan_usaha').value = data.status_perkawinan ; 
  document.getElementById('agama_usaha').value = data.agama ; 
  document.getElementById('alamat_usaha').value = data.alamat ; 
  document.getElementById('nama_surat_usaha').value = "Surat Keterangan Usaha" ; 
  document.getElementById("form_input_usaha").setAttribute('action' , '/addUsaha/'+id);

}

function closeUsaha(){
  $('#modalUsaha').modal('hide');

}


const kehilangan = (data , id) => {
  $('#modalKehilangan').modal('show');

  document.getElementById('nama_kehilangan').value = data.name ; 
  document.getElementById('tempat_lahir_kehilangan').value = data.tempat_lahir ; 
  document.getElementById('tanggal_lahir_kehilangan').value = data.tanggal_lahir ; 
  document.getElementById('nik_kehilangan').value = data.nik ; 
  document.getElementById('status_perkawinan_kehilangan').value = data.status_perkawinan ; 
  document.getElementById('alamat_kehilangan').value = data.alamat ; 
  document.getElementById('nama_surat_kehilangan').value = "Surat Keterangan Kehilangan" ; 
  document.getElementById("form_input_kehilangan").setAttribute('action' , '/addKehilangan/'+id);


}

function closeKehilangan(){
  $('#modalKehilangan').modal('hide');

}


const makeAlamat = () => {
    
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divAlamat');//tidak ada target insertnya karena ini wes terkhir 
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divAlamat');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_alamat');
    input.setAttribute('type' , 'text');
    input.setAttribute('name' , 'alamat');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('required' , 'true');

    input.setAttribute('id' , 'alamat');
    small.setAttribute('id' , 'fileAlamat');
    // input.addEventListener('input' , cekBatasKelahiran(this.id , 'fileKtpIbu' ));
    // input.addEventListener('change' , fileValidation(this.id , 'fileKtpIbu' ));
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_alamat').innerHTML = 'Alamat';
    
    form.insertBefore(div , target);
  }
const makeAgama = () => {
    
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divAlamat');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divAgama');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_agama');
    input.setAttribute('type' , 'text');
    input.setAttribute('name' , 'agama');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('required' , 'true');

    input.setAttribute('id' , 'agama');
    small.setAttribute('id' , 'fileAgama');
    // input.addEventListener('input' , cekBatasKelahiran(this.id , 'fileKtpIbu' ));
    // input.addEventListener('change' , fileValidation(this.id , 'fileKtpIbu' ));
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_agama').innerHTML = 'Agama';
    
    form.insertBefore(div , target);
  }
const makeStatus = () => {
    
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divAgama');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divStatus');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_status');
    input.setAttribute('type' , 'text');
    input.setAttribute('name' , 'status');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('required' , 'true');

    input.setAttribute('id' , 'status');
    small.setAttribute('id' , 'fileStatus');
    // input.addEventListener('input' , cekBatasKelahiran(this.id , 'fileKtpIbu' ));
    // input.addEventListener('change' , fileValidation(this.id , 'fileKtpIbu' ));
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_status').innerHTML = 'Status Perkawinan';
    
    form.insertBefore(div , target);
  }


const makePekerjaan = () => {
    
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divStatus');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divPekerjaan');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_pekerjaan');
    input.setAttribute('type' , 'text');
    input.setAttribute('name' , 'pekerjaan');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('required' , 'true');

    input.setAttribute('id' , 'pekerjaan');
    small.setAttribute('id' , 'filePekerjaan');
    // input.addEventListener('input' , cekBatasKelahiran(this.id , 'fileKtpIbu' ));
    // input.addEventListener('change' , fileValidation(this.id , 'fileKtpIbu' ));
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_pekerjaan').innerHTML = 'Pekerjaan';
    
    form.insertBefore(div , target);
  }
const makeNik = () => {
    
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divPekerjaan');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divNik');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_nik');
    input.setAttribute('type' , 'text');
    input.setAttribute('name' , 'nik');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('required' , 'true');

    input.setAttribute('id' , 'nik');
    small.setAttribute('id' , 'fileNik');
    // input.addEventListener('input' , cekBatasKelahiran(this.id , 'fileKtpIbu' ));
    // input.addEventListener('change' , fileValidation(this.id , 'fileKtpIbu' ));
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_nik').innerHTML = 'NIK';
    
    form.insertBefore(div , target);
  }

  
const makeTanggal = () => {
    
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divNik');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divTanggal');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_tanggal');
    input.setAttribute('type' , 'date');
    input.setAttribute('name' , 'tanggal');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('required' , 'true');

    input.setAttribute('id' , 'tanggal');
    small.setAttribute('id' , 'fileTanggal');
    // input.addEventListener('input' , cekBatasKelahiran(this.id , 'fileKtpIbu' ));
    // input.addEventListener('change' , fileValidation(this.id , 'fileKtpIbu' ));
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_tanggal').innerHTML = 'Tanggal Lahir';
    
    form.insertBefore(div , target);
  }


const makeTempat = () => {
    
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divTanggal');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divTempat');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_tempat');
    input.setAttribute('type' , 'text');
    input.setAttribute('name' , 'tempat');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('required' , 'true');

    input.setAttribute('id' , 'tempat');
    small.setAttribute('id' , 'fileTempat');
    // input.addEventListener('input' , cekBatasKelahiran(this.id , 'fileKtpIbu' ));
    // input.addEventListener('change' , fileValidation(this.id , 'fileKtpIbu' ));
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_tempat').innerHTML = 'Tempat Lahir';
    
    form.insertBefore(div , target);
  }
const makeNama = () => {
    
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divTempat');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divNama');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_nama');
    input.setAttribute('type' , 'text');
    input.setAttribute('name' , 'nama');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('required' , 'true');

    input.setAttribute('id' , 'nama');
    small.setAttribute('id' , 'fileNama');
    // input.addEventListener('input' , cekBatasKelahiran(this.id , 'fileKtpIbu' ));
    // input.addEventListener('change' , fileValidation(this.id , 'fileKtpIbu' ));
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_nama').innerHTML = 'Nama Lengkap';
    
    form.insertBefore(div , target);
  }