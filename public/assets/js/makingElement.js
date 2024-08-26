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
    input.setAttribute('disabled' , 'true');

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
    input.setAttribute('disabled' , 'true');

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
    input.setAttribute('disabled' , 'true');

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
    input.setAttribute('disabled' , 'true');

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
    input.setAttribute('disabled' , 'true');

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
    input.setAttribute('disabled' , 'true');

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
    input.setAttribute('disabled' , 'true');

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
    input.setAttribute('disabled' , 'true');

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