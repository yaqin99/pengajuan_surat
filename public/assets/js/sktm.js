const fileValidation = () => {
    let pengantar  = document.getElementById('pengantar').files[0].name ; 
    let cek = pengantar.match(/.jpg|.png|.pdf|.jpeg/);
    if(!cek){
      document.getElementById('pengantar').value = '';
      document.getElementById("confirm_button").setAttribute('disabled' , 'true');
      document.getElementById('fileAlert').innerHTML = 'Format file salah' ; 
      document.getElementById('fileAlert').style.color = 'red' ; 
    }else {
      document.getElementById('fileAlert').innerHTML = '' ; 
      document.getElementById('fileAlert').style.color = 'none' ; 
    }

  }
  const kkValidation = () => {
    let pengantar  = document.getElementById('kk').files[0].name ; 
    let cek = pengantar.match(/.jpg|.png|.pdf|.jpeg/);
    if(!cek){
      document.getElementById('kk').value = '';
      document.getElementById("confirm_button").setAttribute('disabled' , 'true');
      document.getElementById('fileKk').innerHTML = 'Format file salah' ; 
      document.getElementById('fileKk').style.color = 'red' ; 
    }else {
      document.getElementById('fileKk').innerHTML = '' ; 
      document.getElementById('fileKk').style.color = 'none' ; 
    }

  }

// const sktm = () => {
  //   document.getElementById('tidakMampu').style.display = 'block';
  // }


  //          MODAL DESKRIPSI
  const sktmButton = () => {
    document.getElementById('judulModal').innerHTML =  document.getElementById('sktmSend').innerHTML ; 
    document.getElementById('keteranganSurat').innerHTML = 'Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan'
    document.getElementById('tombolKeterangan').setAttribute('data-bs-target' , '#tidakMampu');
    
  }
  const domisiliButton = () => {
    document.getElementById('judulModal').innerHTML =  document.getElementById('domisiliSend').innerHTML ; 
    document.getElementById('keteranganSurat').innerHTML = 'Surat Keterangan Domisili Usaha adalah sebuah surat yang menyatakan domisili seseorang atau suatu badan usaha. Surat keterangan domisili dibutuhkan untuk mengurus berbagai dokumen legal lainnya seperti SIUP, Tanda Daftar Perusahaan, NPWP, dan untuk mengurus usaha perdagangan lainnya.'
    document.getElementById('tombolKeterangan').setAttribute('data-bs-target' , '#domisili');  
  }


  const makeBidanElement = () => {
    if (document.getElementById('kelahiranBidan') !== null) {
      return ;
    }
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divKeterangan');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','kelahiranBidan');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_kelahiran');
    input.setAttribute('type' , 'file');
    input.setAttribute('name' , 'kelahiranBidan');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('id' , 'input_kelahiran');
    small.setAttribute('id' , 'fileBidan');
    // input.setAttribute('onclick' , 'input_kelahiran');
    // input.setAttribute('onclick' , 'input_kelahiran');
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_kelahiran').innerHTML = 'Bukti Asli Kelahiran dari Bidan';
    
    form.insertBefore(div , target);
  }



  const makeSuratNikahElement = () => {
    if (document.getElementById('divSuratNikah') !== null) {
      return ;
    }
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divKeterangan');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divSuratNikah');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_nikah');
    input.setAttribute('type' , 'file');
    input.setAttribute('name' , 'suratNikah');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('id' , 'input_nikah');
    small.setAttribute('id' , 'fileNikah');
    // input.setAttribute('onclick' , 'input_kelahiran');
    // input.setAttribute('onclick' , 'input_kelahiran');
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_nikah').innerHTML = 'Foto Copy Surat Nikah';
    
    form.insertBefore(div , target);
  }

  
  const makeKtpPelaporElement = () => {
    if (document.getElementById('divKtpPelapor') !== null) {
      return ;
    }
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divKk');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divKtpPelapor');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_pelapor');
    input.setAttribute('type' , 'file');
    input.setAttribute('name' , 'suratNikah');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('id' , 'input_pelapor');
    small.setAttribute('id' , 'filePelapor');
    // input.setAttribute('onclick' , 'input_kelahiran');
    // input.setAttribute('onclick' , 'input_kelahiran');
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_pelapor').innerHTML = 'Foto Copy Ktp Pelapor';
    
    form.insertBefore(div , target);
  }


  const makeKtpSaksi1Element = () => {
    if (document.getElementById('divKtpSaksi1') !== null) {
      return ;
    }
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divKk');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divKtpSaksi1');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_saksi1');
    input.setAttribute('type' , 'file');
    input.setAttribute('name' , 'saksi1');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('id' , 'input_saksi1');
    small.setAttribute('id' , 'fileSaksi1');
    // input.setAttribute('onclick' , 'input_kelahiran');
    // input.setAttribute('onclick' , 'input_kelahiran');
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_saksi1').innerHTML = 'Foto Copy Ktp Saksi 1';
    
    form.insertBefore(div , target);
  }
  const makeKtpSaksi2Element = () => {
    if (document.getElementById('divKtpSaksi2') !== null) {
      return ;
    }
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divKk');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divKtpSaksi2');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_saksi2');
    input.setAttribute('type' , 'file');
    input.setAttribute('name' , 'saksi2');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('id' , 'input_saksi2');
    small.setAttribute('id' , 'fileSaksi2');
    // input.setAttribute('onclick' , 'input_kelahiran');
    // input.setAttribute('onclick' , 'input_kelahiran');
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_saksi2').innerHTML = 'Foto Copy Ktp Saksi 2';
    
    form.insertBefore(div , target);
  }

  const makeKtpIbuElement = () => {
    if (document.getElementById('divKtpIbu') !== null) {
      return ;
    }
    document.getElementById('ktpAyah').innerHTML = 'Foto Copy Ktp Bapak' ;
    document.getElementById('labelKk').innerHTML = 'KK Asli' ;
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divKtpPelapor');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divKtpIbu');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_ktpIbu');
    input.setAttribute('type' , 'file');
    input.setAttribute('name' , 'ktpIbu');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('id' , 'input_ktpIbu');
    small.setAttribute('id' , 'fileKtpIbu');
    // input.setAttribute('onclick' , 'input_kelahiran');
    // input.setAttribute('onclick' , 'input_kelahiran');
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_ktpIbu').innerHTML = 'Foto Copy Ktp Ibu';
    
    form.insertBefore(div , target);
  }


  //          MODAL FORM INPUT

  const umum = () => {
    document.getElementById('judulModal').innerHTML =  document.getElementById('suratUmum').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/suratUmum');
 
  }

  const yoNdakMampu = () => {
    document.getElementById('judulModal').innerHTML =  document.getElementById('sktm').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/suratTidakMampu');
 
  }

  const jomblo = () => {
    document.getElementById('judulModal').innerHTML =  document.getElementById('belumMenikah').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/suratBelumNikah');
 
  }
  const usaha = () => {
    document.getElementById('judulModal').innerHTML =  document.getElementById('suratUsaha').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/suratUsaha');
 
  }
  const domisiliPenduduk = () => {
    document.getElementById('judulModal').innerHTML =  document.getElementById('skdp').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/domisiliPenduduk');
 
  }
  const domisiliUsaha = () => {
    document.getElementById('judulModal').innerHTML =  document.getElementById('skdu').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/domisiliUsaha');
 
  }


  const kelahiran = () => {
    makeBidanElement();
    makeSuratNikahElement();
    makeKtpPelaporElement();
    makeKtpIbuElement();
    makeKtpSaksi1Element();
    makeKtpSaksi2Element();
    document.getElementById('judulModal').innerHTML =  document.getElementById('kelahiran').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/suratKelahiran');
 
  }


  function dismiss(){
  document.getElementById("pengantar").value = "";
  document.getElementById("kk").value = "";
  document.getElementById("confirm_button").setAttribute('disabled' , 'true');

}

  const keterangan  = () => {
    if (document.getElementById('pengantar').files.length === 0) {
    document.getElementById("confirm_button").setAttribute('disabled' , 'true');

  }
    let file = document.getElementById('pengantar').files[0];
  
    if (file.size > 3000000) {
      console.log('kegedean');
      document.getElementById('pengantar').value = '' ; 
      document.getElementById('fileAlert').innerHTML = 'Ukuran File Terlalu Besar' ; 
      document.getElementById('fileAlert').style.color = 'red' ; 
      document.getElementById("confirm_button").setAttribute('disabled' , 'true');

    } else {
      document.getElementById('fileAlert').innerHTML = '' ; 
      document.getElementById('fileAlert').style.color = 'none' ; 
      if (file.value != '' && document.getElementById('kk').value != '') {
        document.getElementById("confirm_button").removeAttribute("disabled");      
        }
    }

    
  }

  const kartuKk  = () => {
    if (document.getElementById('kk').files.length === 0) {
    document.getElementById("confirm_button").setAttribute('disabled' , 'true');

    
  }
    let file = document.getElementById('kk').files[0];
    if (file.size > 3000000) {
      document.getElementById('kk').value = '' ; 
      document.getElementById('fileKk').innerHTML = 'Ukuran File Terlalu Besar' ; 
      document.getElementById('fileKk').style.color = 'red' ; 
      document.getElementById("confirm_button").setAttribute('disabled' , 'true');
    } else {
      document.getElementById('fileKk').innerHTML = '' ; 
      document.getElementById('fileKk').style.color = 'none' ; 

      if (file.value != '' && document.getElementById('pengantar').value != '') {
        document.getElementById("confirm_button").removeAttribute("disabled");      
      }     
    }
    
}

  if (document.getElementById('kk').files.length === 0 || document.getElementById('pengantar').files.length === 0 ) {
    document.getElementById("confirm_button").setAttribute('disabled' , 'true');

  }

