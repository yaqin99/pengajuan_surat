if (document.getElementById('kk').files.length === 0 || document.getElementById('ktp').files.length === 0 ) {
  document.getElementById("confirm_button").setAttribute('disabled' , 'true');
  
  }
const batas = 3000000 ; 




const cekBatas = (targetId , notifId) => {
 
if (document.getElementById(targetId).files.length === 0) {
document.getElementById("confirm_button").setAttribute('disabled' , 'true');

}
let file = document.getElementById(targetId).files[0];

if (file.size > batas) {
  document.getElementById(targetId).value = '' ; 
  document.getElementById(notifId).innerHTML = 'Ukuran File Terlalu Besar' ; 
  document.getElementById(notifId).style.color = 'red' ; 
  document.getElementById("confirm_button").setAttribute('disabled' , 'true');

} else {
  document.getElementById(notifId).innerHTML = '' ; 
  document.getElementById(notifId).style.color = 'none' ; 
  if (file.value != '' && document.getElementById('kk').value != '') {
    document.getElementById("confirm_button").removeAttribute("disabled");      
    }
}
}


const cekBatasKelahiran = (targetId , notifId) => {

if (document.getElementById(targetId).files.length === 0) {
document.getElementById("confirm_button").setAttribute('disabled' , 'true');

}
let file = document.getElementById(targetId).files[0];

if (file.size > batas) {
  document.getElementById(targetId).value = '' ; 
  document.getElementById(notifId).innerHTML = 'Ukuran File Terlalu Besar' ; 
  document.getElementById(notifId).style.color = 'red' ; 
  document.getElementById("confirm_button").setAttribute('disabled' , 'true');

} else {
  document.getElementById(notifId).innerHTML = '' ; 
  document.getElementById(notifId).style.color = 'none' ; 
  if (document.getElementById('ktp').value != '' && document.getElementById('kk').value != '' && document.getElementById('input_ktpIbu').value != '' && document.getElementById('input_pelapor').value != '' && document.getElementById('input_saksi1').value != '' && document.getElementById('input_saksi2').value != ''  && document.getElementById('input_kelahiran').value != ''  && document.getElementById('input_nikah').value != '') {
    document.getElementById("confirm_button").removeAttribute("disabled");      
    }
}
}


const fileValidation = (targetId , alertId) => {
   
    let pengantar  = document.getElementById(targetId).files[0].name ; 
    let cek = pengantar.match(/.jpg|.png|.pdf|.jpeg/);
    if(!cek){
      document.getElementById(targetId).value = '';
      document.getElementById("confirm_button").setAttribute('disabled' , 'true');
      document.getElementById(alertId).innerHTML = 'Format file salah' ; 
      document.getElementById(alertId).style.color = 'red' ; 
    }else {
      document.getElementById(alertId).innerHTML = '' ; 
      document.getElementById(alertId).style.color = 'none' ; 
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
    input.setAttribute('required' , 'true');
    small.setAttribute('id' , 'fileBidan');
    
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_kelahiran').innerHTML = 'Bukti Asli Kelahiran dari Bidan';
    
    form.insertBefore(div , target);
    // input.addEventListener('input' , cekBatasKelahiran('input_kelahiran' , 'fileBidan' ));
    // input.addEventListener('change' , fileValidation('input_kelahiran' , 'fileBidan' ));
  }

  const makeSuratPolsek = () => {
    if (document.getElementById('divPolsek') !== null) {
      return ;
    }
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divKeterangan');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divPolsek');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_polsek');
    input.setAttribute('type' , 'file');
    input.setAttribute('name' , 'suratPolsek');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('id' , 'input_polsek');
    input.setAttribute('required' , 'true');
    small.setAttribute('id' , 'filePolsek');
    
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_polsek').innerHTML = 'Surat Keterangan Kehilangan Dari Polsek / Polres';
    
    form.insertBefore(div , target);
    // input.addEventListener('input' , cekBatasKelahiran('input_kelahiran' , 'fileBidan' ));
    // input.addEventListener('change' , fileValidation('input_kelahiran' , 'fileBidan' ));
  }
  const makePindahElement = () => {
    if (document.getElementById('divPindah') !== null) {
      return ;
    }
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divKtp');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divPindah');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_pindah');
    input.setAttribute('type' , 'file');
    input.setAttribute('name' , 'pindah');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('id' , 'input_pindah');
    input.setAttribute('required' , 'true');
    small.setAttribute('id' , 'filePindah');
    
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_pindah').innerHTML = 'Surat Pindah Dari Kelurahan/Desa/Kota Sebelumnya';
    
    form.insertBefore(div , target);
    // input.addEventListener('input' , cekBatasKelahiran('input_kelahiran' , 'fileBidan' ));
    // input.addEventListener('change' , fileValidation('input_kelahiran' , 'fileBidan' ));
  }
  const makePindahKuasaElement = () => {
    if (document.getElementById('divPindahKuasa') !== null) {
      return ;
    }
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divKtp');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divPindahKuasa');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_kuasa');
    input.setAttribute('type' , 'file');
    input.setAttribute('name' , 'kuasa');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('id' , 'input_kuasa');
    input.setAttribute('required' , 'true');
    small.setAttribute('id' , 'fileKuasa');
    
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_kuasa').innerHTML = 'Surat Kuasa Apabila Bukan yang Bersangkutan';
    
    form.insertBefore(div , target);
    // input.addEventListener('input' , cekBatasKelahiran('input_kelahiran' , 'fileBidan' ));
    // input.addEventListener('change' , fileValidation('input_kelahiran' , 'fileBidan' ));
  }


  const makeKeteranganRsElement = () => {
    if (document.getElementById('divKeteranganRs') !== null) {
      return ;
    }
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divKtp');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divKeteranganRs');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_keteranganRs');
    input.setAttribute('type' , 'file');
    input.setAttribute('name' , 'keteranganRs');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('id' , 'input_keteranganRs');
    input.setAttribute('required' , 'true');
    small.setAttribute('id' , 'fileKeteranganRs');
    
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_keteranganRs').innerHTML = 'Surat Keterangan Dari Rumah Sakit';
    
    form.insertBefore(div , target);
    // input.addEventListener('input' , cekBatasKelahiran('input_kelahiran' , 'fileBidan' ));
    // input.addEventListener('change' , fileValidation('input_kelahiran' , 'fileBidan' ));
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
    input.setAttribute('required' , 'true');

    // input.addEventListener('input' , cekBatasKelahiran(this.id , 'fileNikah' ));
    // input.addEventListener('change' , fileValidation(this.id , 'fileNikah' ));
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_nikah').innerHTML = 'Foto Copy Surat Nikah';
    
    form.insertBefore(div , target);
  }


  const makeKtpAsliElement = () => {
    if (document.getElementById('divKtpAsli') !== null) {
      return ;
    }
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divKtp');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divKtpAsli');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_KtpAsli');
    input.setAttribute('type' , 'file');
    input.setAttribute('name' , 'ktpAsli');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('id' , 'input_nikah');
    small.setAttribute('id' , 'fileKtpAsli');
    input.setAttribute('required' , 'true');

    // input.addEventListener('input' , cekBatasKelahiran(this.id , 'fileNikah' ));
    // input.addEventListener('change' , fileValidation(this.id , 'fileNikah' ));
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_KtpAsli').innerHTML = 'KTP Asli';
    
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
    input.setAttribute('name' , 'ktpPelapor');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('id' , 'input_pelapor');
    input.setAttribute('required' , 'true');

    small.setAttribute('id' , 'filePelapor');
    // input.addEventListener('input' , cekBatasKelahiran(this.id , 'filePelapor' ));
    // input.addEventListener('change' , fileValidation(this.id , 'filePelapor' ));
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
    input.setAttribute('required' , 'true');

    input.setAttribute('id' , 'input_saksi1');
    small.setAttribute('id' , 'fileSaksi1');
    // input.addEventListener('input' , cekBatasKelahiran(this.id , 'fileSaksi1' ));
    // input.addEventListener('change' , fileValidation(this.id , 'fileSaksi1' ));
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
    input.setAttribute('required' , 'true');

    input.setAttribute('id' , 'input_saksi2');
    small.setAttribute('id' , 'fileSaksi2');
    // input.addEventListener('input' , cekBatasKelahiran(this.id , 'fileSaksi2' ));
    // input.addEventListener('change' , fileValidation(this.id , 'fileSaksi2' ));
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_saksi2').innerHTML = 'Foto Copy Ktp Saksi 2';
    
    form.insertBefore(div , target);
  }


  const makeKtpOrtuElement = () => {
    if (document.getElementById('divKtpOrtu') !== null) {
      return ;
    }
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divKk');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divKtpOrtu');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'labelKtpOrtu');
    input.setAttribute('type' , 'file');
    input.setAttribute('name' , 'kkOrtu');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('required' , 'true');

    input.setAttribute('id' , 'input_ktpOrtu');
    small.setAttribute('id' , 'fileSaksi2');
    // input.addEventListener('input' , cekBatasKelahiran(this.id , 'fileSaksi2' ));
    // input.addEventListener('change' , fileValidation(this.id , 'fileSaksi2' ));
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('labelKtpOrtu').innerHTML = 'Foto Copy / KK Asli Orang Tua';
    
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
    input.setAttribute('required' , 'true');

    input.setAttribute('id' , 'input_ktpIbu');
    small.setAttribute('id' , 'fileKtpIbu');
    // input.addEventListener('input' , cekBatasKelahiran(this.id , 'fileKtpIbu' ));
    // input.addEventListener('change' , fileValidation(this.id , 'fileKtpIbu' ));
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_ktpIbu').innerHTML = 'Foto Copy Ktp Ibu';
    
    form.insertBefore(div , target);
  }

  const makeNoHpElement = () => {
    if (document.getElementById('divNohp') !== null) {
      return ;
    }
    
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divKeterangan');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divNohp');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_noHp');
    input.setAttribute('type' , 'number');
    input.setAttribute('name' , 'noHp');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('required' , 'true');

    input.setAttribute('id' , 'input_noHp');
    small.setAttribute('id' , 'fileNoHp');
    // input.addEventListener('input' , cekBatasKelahiran(this.id , 'fileKtpIbu' ));
    // input.addEventListener('change' , fileValidation(this.id , 'fileKtpIbu' ));
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_noHp').innerHTML = 'Nomor Telepon Pelapor';
    
    form.insertBefore(div , target);
  }


  //          MODAL FORM INPUT

  const skck = () => {
    dismissKelahiran();
    dismissKematian();
    dismissKehilangan();
    dismissPindah();

    document.getElementById('judulModal').innerHTML =  document.getElementById('skck').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/skck/' + document.getElementById('skck').innerHTML);
 
  }
  const umum = () => {
    dismissKelahiran();
    dismissKematian();
    dismissKehilangan();
    dismissPindah();

    document.getElementById('judulModal').innerHTML =  document.getElementById('suratUmum').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/suratUmum/' + document.getElementById('suratUmum').innerHTML);
 
  }

  const yoNdakMampu = () => {
    dismissKelahiran();
    dismissKematian();
    dismissKehilangan();
    dismissPindah();

    let judul = document.getElementById('sktm').innerHTML ; 
    document.getElementById('judulModal').innerHTML = judul   ;
    document.getElementById("form_input").setAttribute('action' , '/suratTidakMampu/'+judul);
 
  }

  const jomblo = () => {
    dismissKelahiran();
    dismissKematian();
    dismissKehilangan();
    dismissPindah();

    document.getElementById('judulModal').innerHTML =  document.getElementById('belumMenikah').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/suratBelumNikah/' + document.getElementById('belumMenikah').innerHTML);
 
  }
  const usaha = () => {
    dismissKelahiran();
    dismissKematian();
    dismissKehilangan();
    dismissPindah();

    document.getElementById('judulModal').innerHTML =  document.getElementById('suratUsaha').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/suratUsaha/' +  document.getElementById('suratUsaha').innerHTML);
 
  }
  const domisiliPenduduk = () => {
    dismissKelahiran();
    dismissKematian();
    dismissKehilangan();
    dismissPindah();

    document.getElementById('judulModal').innerHTML =  document.getElementById('skdp').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/domisiliPenduduk/' + document.getElementById('skdp').innerHTML);
 
  }
  const domisiliUsaha = () => {
    dismissKematian();
    dismissKehilangan();
    dismissPindah();

    dismissKelahiran();
    document.getElementById('judulModal').innerHTML =  document.getElementById('skdu').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/domisiliUsaha/'+ document.getElementById('skdu').innerHTML);
 
  }


  const kehilangan = () => {
    dismissKematian();
    dismissKelahiran();
    makeSuratPolsek();
    dismissPindah();
    
    document.getElementById('judulModal').innerHTML =  document.getElementById('kehilangan').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/suratKehilangan/' + document.getElementById('kehilangan').innerHTML);
 
  }
  const pindah = () => {
    dismissKematian();
    dismissKelahiran();
    dismissKehilangan();
    dismissPindah();
    makePindahElement();
    makePindahKuasaElement();

    document.getElementById('judulModal').innerHTML =  document.getElementById('pindah').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/suratPindah');
 
  }
  const kelahiran = () => {
    dismissKematian();
    dismissKehilangan();
    dismissPindah();
    makeBidanElement();
    makeSuratNikahElement();
    makeKtpPelaporElement();
    makeKtpIbuElement();
    makeKtpSaksi1Element();
    makeKtpSaksi2Element();
    makeNoHpElement();
   
    document.getElementById('judulModal').innerHTML =  document.getElementById('kelahiran').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/suratKelahiran/' + document.getElementById('kelahiran').innerHTML);
 
  }



  const dismissPindah = () => {
    if (document.getElementById("divPindah") != null) {
      document.getElementById('ktpAyah').innerHTML = 'Foto Copy KTP ' ;
      document.getElementById('labelKk').innerHTML = 'Foto Copy KK' ;
      document.getElementById("divPindah").remove();
      document.getElementById("divPindahKuasa").remove();
     
    } 
   
  }
  const dismissKelahiran = () => {
    if (document.getElementById("divKtpIbu") != null) {
      document.getElementById('ktpAyah').innerHTML = 'Foto Copy KTP ' ;
      document.getElementById('labelKk').innerHTML = 'Foto Copy KK' ;
      document.getElementById("divKtpIbu").remove();
      document.getElementById("divKtpPelapor").remove();
      document.getElementById("divKtpSaksi1").remove();
      document.getElementById("divKtpSaksi2").remove();
      document.getElementById("kelahiranBidan").remove();
      document.getElementById("divSuratNikah").remove();
      document.getElementById("divNohp").remove();
    } 
   
  }

  const dismissKematian = () => {
    if (document.getElementById("divKeteranganRs") != null) {
      document.getElementById('ktpAyah').innerHTML = 'Foto Copy KTP ' ;
      document.getElementById('labelKk').innerHTML = 'Foto Copy KK' ;
      document.getElementById("divKeteranganRs").remove();
      document.getElementById("divKtpAsli").remove();
      document.getElementById("divKtpOrtu").remove();
      document.getElementById("divKtpPelapor").remove();
      document.getElementById("divKtpSaksi1").remove();
      document.getElementById("divNohp").remove();
    } 
   
  }
  const dismissKehilangan = () => {
    if (document.getElementById("divPolsek") != null) {
      document.getElementById('ktpAyah').innerHTML = 'Foto Copy KTP ' ;
      document.getElementById('labelKk').innerHTML = 'Foto Copy KK' ;
      document.getElementById("divPolsek").remove();
    } 
  }

  const kematian = () => {
    dismissKelahiran();
    dismissKehilangan();
    dismissPindah();
    
    makeKeteranganRsElement();
    makeKtpAsliElement();
    makeKtpOrtuElement();
    makeKtpPelaporElement();
    makeKtpSaksi1Element();
    makeNoHpElement();

    document.getElementById('ktpAyah').innerHTML = 'Foto Copy KTP' ;
    document.getElementById('labelKk').innerHTML = 'KK Asli' ;
    document.getElementById('judulModal').innerHTML =  document.getElementById('kematian').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/suratKematian/' + document.getElementById('kematian').innerHTML );
 
  }


  function dismiss (){
  document.getElementById("ktp").value = "";
  document.getElementById("kk").value = "";
  document.getElementById("confirm_button").setAttribute('disabled' , 'true');

}


