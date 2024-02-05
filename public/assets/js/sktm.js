if (document.getElementById('kk').files.length === 0 || document.getElementById('ktp').files.length === 0 ) {
  document.getElementById("confirm_button").setAttribute('disabled' , 'true');
  
  }
const batas = 10000000 ; 




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
    let cek = pengantar.match(/.jpg|.png|.pdf|.jpeg|.JPG/);
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

  const makePersyaratanKehilangan = () => {
    if (document.getElementById('ketPolsek') !== null) {
      return ;
    }
    const li = document.createElement("li");
    li.innerHTML = 'Surat Keterangan Kehilangan Dari Polsek / Polres' ; 
    li.setAttribute('id' , 'ketPolsek');
    const parent = document.getElementById('list');
    parent.appendChild(li);
    const target = document.getElementById('fcKeterangan');
    parent.insertBefore(li , target);
  }

  const makePersyaratanPindah = () => {
    if (document.getElementById('pindahDatang') !== null) {
      return ;
    }
    const li = document.createElement("li");
    li.innerHTML = 'Surat Pindah Dari Kelurahan/Desa/Kota Sebelumnya' ; 
    li.setAttribute('id' , 'pindahDatang');
    const parent = document.getElementById('list');
    parent.appendChild(li);
    const target = document.getElementById('fcKeterangan');
    parent.insertBefore(li , target);
  }


  const makePersyaratanPecah = () => {
    if (document.getElementById('fcIjazahLaki') !== null) {
      return ;
    }
    document.getElementById('fcKtp').innerHTML = 'KTP Pengantin Laki - laki';
    document.getElementById('fcKk').innerHTML = 'KK Asli Orang Tua';
    const li = document.createElement("li");
    li.innerHTML = 'Foto Copy Ijazah Pengantin laki - laki' ; 
    li.setAttribute('id' , 'fcIjazahLaki');
    const li2 = document.createElement("li");
    li2.innerHTML = 'Foto Copy Ijazah Pengantin Perempuan' ; 
    li2.setAttribute('id' , 'fcIjazahPerempuan');
    const li3 = document.createElement("li");
    li3.innerHTML = 'KTP Pengantin Perempuan ' ; 
    li3.setAttribute('id' , 'fcKtpPerempuan');
    const li4 = document.createElement("li");
    
    li4.innerHTML = 'KK Asli Mertua ' ; 
    li4.setAttribute('id' , 'kkMertua');
    const li5 = document.createElement("li");
    li5.innerHTML = 'Foto Copy Surat Nikah ' ; 
    li5.setAttribute('id' , 'fcSuratNikah');
    const li6 = document.createElement("li");
    li6.innerHTML = 'Foto Copy Surat Nikah Orang Tua' ; 
    li6.setAttribute('id' , 'fcSuratNikahOrtu');
    const li8 = document.createElement("li");
    li8.innerHTML = 'Foto Copy Surat Nikah Mertua' ; 
    li8.setAttribute('id' , 'fcSuratNikahMertua');
    const li7 = document.createElement("li");
    li7.innerHTML = 'Nomor Telepon Pelapor' ; 
    li7.setAttribute('id' , 'noPel');
    const parent = document.getElementById('list');
    parent.appendChild(li);
    parent.appendChild(li2);
    parent.appendChild(li3);
    parent.appendChild(li4);
    parent.appendChild(li5);
    parent.appendChild(li6);
    parent.appendChild(li7);
    parent.appendChild(li8);
    // const target = document.getElementById('fcKtp');
    // parent.insertBefore(li , target);
  }
  const makePersyaratanKelahiran = () => {
    if (document.getElementById('fcKtpIbu') !== null) {
      return ;
    }
    document.getElementById('fcKtp').innerHTML = 'Foto Copy KTP Bapak';
    document.getElementById('fcKk').innerHTML = 'KK Asli';
    const li = document.createElement("li");
    li.innerHTML = 'Foto Copy KTP Ibu' ; 
    li.setAttribute('id' , 'fcKtpIbu');
    const li2 = document.createElement("li");
    li2.innerHTML = 'Foto Copy KTP Pelapor' ; 
    li2.setAttribute('id' , 'fcKtpPelapor');
    const li3 = document.createElement("li");
    li3.innerHTML = 'Foto Copy KTP Saksi 1 ' ; 
    li3.setAttribute('id' , 'fcKtpSaksi1');
    const li4 = document.createElement("li");
    li4.innerHTML = 'Foto Copy KTP Saksi 2 ' ; 
    li4.setAttribute('id' , 'fcKtpSaksi2');
    const li5 = document.createElement("li");
    li5.innerHTML = 'Bukti Asli Kelahiran dari Bidan ' ; 
    li5.setAttribute('id' , 'kelahiranDariBidan');
    const li6 = document.createElement("li");
    li6.innerHTML = 'Foto Copy Surat Nikah ' ; 
    li6.setAttribute('id' , 'fcSuratNikah');
    const li7 = document.createElement("li");
    li7.innerHTML = 'Nomor Telepon Pelapor' ; 
    li7.setAttribute('id' , 'noPel');
    const parent = document.getElementById('list');
    parent.appendChild(li);
    parent.appendChild(li2);
    parent.appendChild(li3);
    parent.appendChild(li4);
    parent.appendChild(li5);
    parent.appendChild(li6);
    parent.appendChild(li7);
    const target = document.getElementById('fcKtp');
    parent.insertBefore(li , target);
  }

  const makePersyaratanKematian = () => {
    if (document.getElementById('ketRs') !== null) {
      return ;
    }
    document.getElementById('fcKk').innerHTML = 'KK Asli';
    const li = document.createElement("li");
    li.innerHTML = 'Surat Keterangan Dari Rumah Sakit' ; 
    li.setAttribute('id' , 'ketRs');
    const li2 = document.createElement("li");
    li2.innerHTML = 'Foto Copy KTP Pelapor' ; 
    li2.setAttribute('id' , 'fcKtpPelapor');
    const li3 = document.createElement("li");
    li3.innerHTML = 'Foto Copy KTP Saksi 1 ' ; 
    li3.setAttribute('id' , 'fcKtpSaksi1');
    const li4 = document.createElement("li");
    li4.innerHTML = 'Foto Copy KTP Saksi 2 ' ; 
    li4.setAttribute('id' , 'fcKtpSaksi2');
    
    const li6 = document.createElement("li");
    li6.innerHTML = 'Foto Copy / KK Asli Orang Tua ' ; 
    li6.setAttribute('id' , 'fcKkOrtu');
    const li7 = document.createElement("li");
    li7.innerHTML = 'Nomor Telepon Pelapor' ; 
    li7.setAttribute('id' , 'noPel');
    const li8 = document.createElement("li");
    li8.innerHTML = 'KTP Asli' ; 
    li8.setAttribute('id' , 'ktpAsli');
    const parent = document.getElementById('list');
    parent.appendChild(li);
    parent.appendChild(li2);
    parent.appendChild(li3);
    parent.appendChild(li4);
    parent.appendChild(li6);
    parent.appendChild(li7);
    parent.appendChild(li8);
    const target = document.getElementById('ktpAsli');
    parent.insertBefore(li , target);
    const target2 = document.getElementById('fcKtp');
    parent.insertBefore(li8 , target2);
  }
 
  const dismissPersyaratanPindah = () => {
    if (document.getElementById("pindahDatang") != null) {
      // document.getElementById('ktpAyah').innerHTML = 'Foto Copy KTP ' ;
      // document.getElementById('labelKk').innerHTML = 'Foto Copy KK' ;
      document.getElementById("pindahDatang").remove();
      
    } 
  }
  const dismissPersyaratanKehilangan = () => {
    if (document.getElementById("ketPolsek") != null) {
      // document.getElementById('ktpAyah').innerHTML = 'Foto Copy KTP ' ;
      // document.getElementById('labelKk').innerHTML = 'Foto Copy KK' ;
      document.getElementById("ketPolsek").remove();
      
    } 
  }
  const dismissPersyaratanKelahiran = () => {
    if (document.getElementById("fcKtpIbu") != null) {
      document.getElementById('fcKtp').innerHTML = 'Foto Copy KTP';
      document.getElementById('fcKk').innerHTML = 'Foto Copy KK';
      // document.getElementById('ktpAyah').innerHTML = 'Foto Copy KTP ' ;
      // document.getElementById('labelKk').innerHTML = 'Foto Copy KK' ;
      document.getElementById("fcKtpIbu").remove();
      document.getElementById("fcKtpPelapor").remove();
      document.getElementById("fcKtpSaksi1").remove();
      document.getElementById("fcKtpSaksi2").remove();
      document.getElementById("kelahiranDariBidan").remove();
      document.getElementById("fcSuratNikah").remove();
      document.getElementById("noPel").remove();
      
    } 
  }
  const dismissPersyaratanKematian = () => {
    if (document.getElementById("ketRs") != null) {
      document.getElementById('fcKtp').innerHTML = 'Foto Copy KTP';
      document.getElementById('fcKk').innerHTML = 'Foto Copy KK';
      // document.getElementById('ktpAyah').innerHTML = 'Foto Copy KTP ' ;
      // document.getElementById('labelKk').innerHTML = 'Foto Copy KK' ;
      document.getElementById("ketRs").remove();
      document.getElementById("fcKtpPelapor").remove();
      document.getElementById("fcKtpSaksi1").remove();
      document.getElementById("fcKtpSaksi2").remove();
      document.getElementById("fcKkOrtu").remove();
      document.getElementById("ktpAsli").remove();
      document.getElementById("noPel").remove();
      
    } 
  }
  const dismissPersyaratanPecah = () => {
    if (document.getElementById("fcIjazahLaki") != null) {
      document.getElementById('fcKtp').innerHTML = 'Foto Copy KTP';
      document.getElementById('fcKk').innerHTML = 'Foto Copy KK';
      // document.getElementById('ktpAyah').innerHTML = 'Foto Copy KTP ' ;
      // document.getElementById('labelKk').innerHTML = 'Foto Copy KK' ;
      document.getElementById("fcIjazahLaki").remove();
      document.getElementById("fcIjazahPerempuan").remove();
      document.getElementById("fcKtpPerempuan").remove();
      document.getElementById("kkMertua").remove();
      document.getElementById("fcSuratNikah").remove();
      document.getElementById("fcSuratNikahOrtu").remove();
      document.getElementById("fcSuratNikahMertua").remove();
      document.getElementById("noPel").remove();
      
    } 
  }

  
  
  
  
  
 
  //          MODAL DESKRIPSI
  const sktmButton = (judul) => {
    document.getElementById('judul').innerHTML =  judul ; 
    document.getElementById('keteranganSurat').innerHTML = 'Surat Keterangan Tidak Mampu adalah surat yang dikeluarkan oleh pihak Kelurahan atau Desa bagi keluarga miskin untuk mendapatkan kemudahan dalam kehidupannya baik kesehatan, perekonomian, dan pendidikan'
    document.getElementById('tombolKeterangan').setAttribute('data-bs-target' , '#flexib');
    dismissPersyaratanKehilangan();     
    dismissPersyaratanKelahiran();
    dismissPersyaratanKematian();
    dismissPersyaratanPecah();
    dismissPersyaratanPindah();
    yoNdakMampu();
  }
  const suratUmum = (judul) => {
    document.getElementById('judul').innerHTML =  judul ; 
    document.getElementById('keteranganSurat').innerHTML = 'Surat Keterangan umum meliputi keterangan sesuai yang dibutuhkan masyarakat untuk pengajuan pelayanan. Syarat keterangan umum : Surat Pengantar dari RT/RW. Fotocopy Kartu Tanda Penduduk Elektronik (KTP-el).'
    document.getElementById('tombolKeterangan').setAttribute('data-bs-target' , '#flexib');
    dismissPersyaratanKehilangan();     
    dismissPersyaratanKelahiran();
    dismissPersyaratanKematian();
    dismissPersyaratanPecah();
    dismissPersyaratanPindah();

    umum();
  }
  const domisiliButton = (judul) => {
    document.getElementById('judul').innerHTML =  judul ; 
    document.getElementById('keteranganSurat').innerHTML = 'Surat Keterangan Domisili Usaha adalah sebuah surat yang menyatakan domisili seseorang atau suatu badan usaha. Surat keterangan domisili dibutuhkan untuk mengurus berbagai dokumen legal lainnya seperti SIUP, Tanda Daftar Perusahaan, NPWP, dan untuk mengurus usaha perdagangan lainnya.'
    document.getElementById('tombolKeterangan').setAttribute('data-bs-target' , '#flexib');  
    dismissPersyaratanKehilangan();     
    dismissPersyaratanKelahiran();
    dismissPersyaratanKematian();
    dismissPersyaratanPecah();
    dismissPersyaratanPindah();

    domisiliPenduduk();
  }
  const domisiliUsahaButton = (judul) => {
    document.getElementById('judul').innerHTML =  judul ; 
    document.getElementById('keteranganSurat').innerHTML = 'Surat Keterangan Domisili Usaha adalah sebuah surat atau izin yang menyatakan domisili seseorang atau suatu badan usaha.'
    document.getElementById('tombolKeterangan').setAttribute('data-bs-target' , '#flexib');  
    dismissPersyaratanKehilangan();     
    dismissPersyaratanKelahiran();
    dismissPersyaratanKematian();
    dismissPersyaratanPecah();
    dismissPersyaratanPindah();

    domisiliUsaha();
  }
  const kehilanganButton = (judul) => {
    document.getElementById('judul').innerHTML =  judul ; 
    document.getElementById('keteranganSurat').innerHTML = 'Surat Keterangan Kehilangan adalah surat keterangaan  yang menerangkaan bahwa pemohon/ masyarakat kehilangan barang maupun dokumen/ surat tertentu.'
    document.getElementById('tombolKeterangan').setAttribute('data-bs-target' , '#flexib');  
    kehilangan();
    dismissPersyaratanKelahiran();
    dismissPersyaratanKematian();
    dismissPersyaratanPecah();
    dismissPersyaratanPindah();

    makePersyaratanKehilangan();
  }
  const belumButton = (judul) => {
    document.getElementById('judul').innerHTML =  judul ; 
    document.getElementById('keteranganSurat').innerHTML = 'Surat Keterangan Belum Pernah Menikah adalah dokumen yang fungsinya menyatakan bahwa seseorang belum pernah menikah atau berstatus masih lajang. Kalau dahulu pembuatan surat keterangan belum menikah hanya bisa dilakukan di Dinas Kependudukan dan Catatan Sipil (Disdukcapil) setempat.'
    document.getElementById('tombolKeterangan').setAttribute('data-bs-target' , '#flexib');  
    dismissPersyaratanKehilangan();     
    dismissPersyaratanKelahiran();
    dismissPersyaratanKematian();
    dismissPersyaratanPecah();
    dismissPersyaratanPindah();

    jomblo();
  }
  const usahaButton = (judul) => {
    document.getElementById('judul').innerHTML =  judul ; 
    document.getElementById('keteranganSurat').innerHTML = 'Surat Keterangan Usaha (SKU) adalah surat penting yang dibuat langsung oleh aparat lokasi usaha tersebut. Pada umumnya, aparat yang mengeluarkan Surat Keterangan Usaha adalah kelurahan atau kecamatan setempat.'
    document.getElementById('tombolKeterangan').setAttribute('data-bs-target' , '#flexib');  
    dismissPersyaratanKehilangan();     
    dismissPersyaratanKelahiran();
    dismissPersyaratanKematian();
    dismissPersyaratanPecah();
    dismissPersyaratanPindah();

    usaha();
  }
  const skckButton = (judul) => {
    document.getElementById('judul').innerHTML =  judul ; 
    document.getElementById('keteranganSurat').innerHTML = 'Surat Keterangan Berkelakuan Baik berisikan catatan perilaku baik seseorang secara hukum.'
    document.getElementById('tombolKeterangan').setAttribute('data-bs-target' , '#flexib'); 
    dismissPersyaratanKehilangan();     
    dismissPersyaratanKelahiran();
    dismissPersyaratanKematian();
    dismissPersyaratanPecah();
    dismissPersyaratanPindah();

    skck();
  }
  const kelahiranButton = (judul) => {
    document.getElementById('judul').innerHTML =  judul ; 
    document.getElementById('keteranganSurat').innerHTML = 'Surat Keterangan Kelahiran adalah suatu dokumen identitas autentik yang wajib dimiliki setiap warga negara Indonesia. Dokumen ini sebagai bukti sah terkait status dan peristiwa kelahiran seseorang dan termasuk hak setiap anak Indonesia.'
    document.getElementById('tombolKeterangan').setAttribute('data-bs-target' , '#flexib');  
    dismissPersyaratanKehilangan();     
    dismissPersyaratanKematian();
    dismissPersyaratanPecah();
    dismissPersyaratanPindah();

    makePersyaratanKelahiran();
    kelahiran();
  }
  const kematianButton = (judul) => {
    document.getElementById('judul').innerHTML =  judul ; 
    document.getElementById('keteranganSurat').innerHTML = 'Surat Keterangan Kematian adalah dokumen dalam pembuktian administrasi bahwasanya seseorang telah dinyatakan meninggal dunia'
    document.getElementById('tombolKeterangan').setAttribute('data-bs-target' , '#flexib');  
    dismissPersyaratanKehilangan();     
    dismissPersyaratanKelahiran();
    dismissPersyaratanPecah();
    dismissPersyaratanPindah();

    makePersyaratanKematian();
    kematian();
  }
  const pecah = (judul) => {
    document.getElementById('judul').innerHTML =  judul ; 
    document.getElementById('keteranganSurat').innerHTML = 'Surat Keterangan Pecah KK adalah surat yang dibuat  karena alasan perubahan status seperti pernikahan, keperluan pengurusan bantuan sosial, atau berbagai alasan lainnya'
    document.getElementById('tombolKeterangan').setAttribute('data-bs-target' , '#flexib');  
    dismissPersyaratanKehilangan();     
    dismissPersyaratanKelahiran();
    dismissPersyaratanKematian();
    dismissPersyaratanPindah();

    makePersyaratanPecah();
    pecahKk();
  }
  const pindahDatang = (judul) => {
    document.getElementById('judul').innerHTML =  judul ; 
    document.getElementById('keteranganSurat').innerHTML = 'Surat Keterangan Pindah Datang digunakan sebagai dasar proses perekaman dalam data base kependudukan, perubahan KK bagi kepala/anggota keluarga yang tidak pindah dan proses Penerbitan KK/KTP di alamat baru.'
    document.getElementById('tombolKeterangan').setAttribute('data-bs-target' , '#flexib');  
    dismissPersyaratanKehilangan();     
    dismissPersyaratanKelahiran();
    dismissPersyaratanKematian();
    dismissPersyaratanPecah();
    makePersyaratanPindah();
    pindah();
  }
  const pindahKeluar = (judul) => {
    document.getElementById('judul').innerHTML =  judul ; 
    document.getElementById('keteranganSurat').innerHTML = 'Surat Keterangan Pindah Keluar adalah surat yang digunakan sebagai dasar proses perekaman dalam data base kependudukan, perubahan KK bagi kepala/anggota keluarga yang tidak pindah dan proses Penerbitan KK/KTP di alamat baru.'
    document.getElementById('tombolKeterangan').setAttribute('data-bs-target' , '#flexib');  
    dismissPersyaratanKehilangan();     
    dismissPersyaratanKelahiran();
    dismissPersyaratanKematian();
    dismissPersyaratanPecah();
    dismissPersyaratanPindah();

    keluar();
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

  const makeSuratNikahOrangTuaElement = () => {
    if (document.getElementById('divSuratNikahOrtu') !== null) {
      return ;
    }
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divKeterangan');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divSuratNikahOrtu');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_nikahOrtu');
    input.setAttribute('type' , 'file');
    input.setAttribute('name' , 'suratNikahOrtu');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('id' , 'input_nikahOrtu');
    small.setAttribute('id' , 'fileNikahOrtu');
    input.setAttribute('required' , 'true');

    // input.addEventListener('input' , cekBatasKelahiran(this.id , 'fileNikah' ));
    // input.addEventListener('change' , fileValidation(this.id , 'fileNikah' ));
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_nikahOrtu').innerHTML = 'Foto Copy Surat Nikah Orang Tua';
    
    form.insertBefore(div , target);
  }

  const makeSuratNikahMertuaElement = () => {
    if (document.getElementById('divSuratNikahMertua') !== null) {
      return ;
    }
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divKeterangan');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divSuratNikahMertua');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_nikahMertua');
    input.setAttribute('type' , 'file');
    input.setAttribute('name' , 'suratNikahMertua');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('id' , 'input_nikahMertua');
    small.setAttribute('id' , 'fileNikahMertua');
    input.setAttribute('required' , 'true');

    // input.addEventListener('input' , cekBatasKelahiran(this.id , 'fileNikah' ));
    // input.addEventListener('change' , fileValidation(this.id , 'fileNikah' ));
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_nikahMertua').innerHTML = 'Foto Copy Surat Nikah Mertua';
    
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

  const makeKkMertuaElement = () => {
    if (document.getElementById('divKkMertua') !== null) {
      return ;
    }
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divSuratNikah');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divKkMertua');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_mertua');
    input.setAttribute('type' , 'file');
    input.setAttribute('name' , 'kkMertua');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('id' , 'input_Mertua');
    input.setAttribute('required' , 'true');

    small.setAttribute('id' , 'fileKkMertua');
    // input.addEventListener('input' , cekBatasKelahiran(this.id , 'filePelapor' ));
    // input.addEventListener('change' , fileValidation(this.id , 'filePelapor' ));
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_mertua').innerHTML = 'KK Asli Mertua';
    
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


  const makeKtpPengantinWanitaElement = () => {
    if (document.getElementById('divKtpWanita') !== null) {
      return ;
    }
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divKk');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divKtpWanita');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'labelKtpWanita');
    input.setAttribute('type' , 'file');
    input.setAttribute('name' , 'input_ktpWanita');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('required' , 'true');

    input.setAttribute('id' , 'input_ktpWanita');
    small.setAttribute('id' , 'fileKtpWanita');
    // input.addEventListener('input' , cekBatasKelahiran(this.id , 'fileSaksi2' ));
    // input.addEventListener('change' , fileValidation(this.id , 'fileSaksi2' ));
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('labelKtpWanita').innerHTML = 'KTP Pengantin Wanita';
    
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



  const makeIjazahPerempuanElement = () => {
    if (document.getElementById('divIjazahPerempuan') !== null) {
      return ;
    }
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divKtp');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divIjazahPerempuan');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_ijazahPerempuan');
    input.setAttribute('type' , 'file');
    input.setAttribute('name' , 'ijazahPerempuan');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('required' , 'true');

    input.setAttribute('id' , 'input_ijazahPerempuan');
    small.setAttribute('id' , 'fileIjazahPerempuan');
    // input.addEventListener('input' , cekBatasKelahiran(this.id , 'fileKtpIbu' ));
    // input.addEventListener('change' , fileValidation(this.id , 'fileKtpIbu' ));
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_ijazahPerempuan').innerHTML = 'Foto Copy Ijazah Pengantin Perempuan';
    
    form.insertBefore(div , target);
  }
  const makeIjazahLakiElement = () => {
    if (document.getElementById('divIjazah') !== null) {
      return ;
    }
    const div = document.createElement("div");
    const label = document.createElement("label");
    const input = document.createElement("input");
    const p = document.createElement("p");
    const small = document.createElement("small");
    const target = document.getElementById('divKtp');
    div.setAttribute('class','mb-3');
    div.setAttribute('id','divIjazah');
    label.setAttribute('class' , 'form-label');
    label.setAttribute('id' , 'label_ijazah');
    input.setAttribute('type' , 'file');
    input.setAttribute('name' , 'ijazah');
    input.setAttribute('class' , 'form-control');
    input.setAttribute('required' , 'true');

    input.setAttribute('id' , 'input_ijazah');
    small.setAttribute('id' , 'fileIjazah');
    // input.addEventListener('input' , cekBatasKelahiran(this.id , 'fileKtpIbu' ));
    // input.addEventListener('change' , fileValidation(this.id , 'fileKtpIbu' ));
    p.appendChild(small);
    div.appendChild(label);
    div.appendChild(input);
    div.appendChild(p);
    const form = document.getElementById('form_input');
    form.appendChild(div);
    document.getElementById('label_ijazah').innerHTML = 'Foto Copy Ijazah Pengantin Laki - laki';
    
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
    dismissPecah();

    document.getElementById('judulModal').innerHTML =  document.getElementById('skck').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/skck/' + document.getElementById('skck').innerHTML);
 
  }
  const umum = () => {
    dismissKelahiran();
    dismissKematian();
    dismissKehilangan();
    dismissPindah();
    dismissPecah();

    document.getElementById('judulModal').innerHTML =  document.getElementById('suratUmum').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/suratUmum/' + document.getElementById('suratUmum').innerHTML);
 
  }

  const yoNdakMampu = () => {
    dismissKelahiran();
    dismissKematian();
    dismissKehilangan();
    dismissPindah();
    dismissPecah();

    let judul = document.getElementById('sktm').innerHTML ; 
    document.getElementById('judulModal').innerHTML = judul   ;
    document.getElementById("form_input").setAttribute('action' , '/suratTidakMampu/'+judul);
 
  }

  const jomblo = () => {
    dismissKelahiran();
    dismissKematian();
    dismissKehilangan();
    dismissPindah();
    dismissPecah();

    document.getElementById('judulModal').innerHTML =  document.getElementById('belumMenikah').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/suratBelumNikah/' + document.getElementById('belumMenikah').innerHTML);
 
  }
  const usaha = () => {
    dismissKelahiran();
    dismissKematian();
    dismissKehilangan();
    dismissPindah();
    dismissPecah();

    document.getElementById('judulModal').innerHTML =  document.getElementById('suratUsaha').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/suratUsaha/' +  document.getElementById('suratUsaha').innerHTML);
 
  }
  const domisiliPenduduk = () => {
    dismissKelahiran();
    dismissKematian();
    dismissKehilangan();
    dismissPindah();
    dismissPecah();

    document.getElementById('judulModal').innerHTML =  document.getElementById('skdp').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/domisiliPenduduk/' + document.getElementById('skdp').innerHTML);
 
  }
  const domisiliUsaha = () => {
    dismissKematian();
    dismissKehilangan();
    dismissPindah();
    dismissKelahiran();
    dismissPecah();

    document.getElementById('judulModal').innerHTML =  document.getElementById('skdu').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/domisiliUsaha/'+ document.getElementById('skdu').innerHTML);
 
  }

  const pecahKk = () => {
    dismissKematian();
    dismissKehilangan();
    dismissPindah();
    dismissKelahiran();

    makeIjazahLakiElement();
    makeIjazahPerempuanElement();
    makeKtpPengantinWanitaElement()
    makeSuratNikahElement(); 
    makeSuratNikahOrangTuaElement();
    makeSuratNikahMertuaElement();
    makeKkMertuaElement();
    makeNoHpElement();
    document.getElementById('ktpAyah').innerHTML = 'KTP Pengantin Laki - laki ' ;
    document.getElementById('labelKk').innerHTML = 'KK Asli Orang Tua' ;
    document.getElementById('judulModal').innerHTML =  document.getElementById('pecah').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/suratPecah/' + document.getElementById('pecah').innerHTML);
  } 


  const kehilangan = () => {
    dismissKematian();
    dismissKelahiran();
    dismissPindah();
    dismissPecah();
    
    makeSuratPolsek();
    document.getElementById('judulModal').innerHTML =  document.getElementById('kehilangan').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/suratKehilangan/' + document.getElementById('kehilangan').innerHTML);
 
  }
  const pindah = () => {
    dismissKematian();
    dismissKelahiran();
    dismissKehilangan();
    dismissPindah();
    dismissPecah();

    makePindahElement();
    // makePindahKuasaElement();

    document.getElementById('judulModal').innerHTML =  document.getElementById('pindah').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/suratPindah/' + document.getElementById('pindah').innerHTML);
 
  }

  const keluar = () => {
    dismissKematian();
    dismissKelahiran();
    dismissKehilangan();
    dismissPindah();
    dismissPecah();

    // makePindahElement();
    // makePindahKuasaElement();

    document.getElementById('judulModal').innerHTML =  document.getElementById('keluar').innerHTML ;
    document.getElementById("form_input").setAttribute('action' , '/suratKeluar/' + document.getElementById('keluar').innerHTML);
 
  }
  const kelahiran = () => {
    dismissKematian();
    dismissKehilangan();
    dismissPindah();
    dismissPecah();

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
  const dismissPecah = () => {
    if (document.getElementById("divIjazah") != null) {
      document.getElementById('ktpAyah').innerHTML = 'Foto Copy KTP ' ;
      document.getElementById('labelKk').innerHTML = 'Foto Copy KK' ;
      document.getElementById("divIjazah").remove();
      document.getElementById("divIjazahPerempuan").remove();
      document.getElementById("divKtpWanita").remove();
      document.getElementById("divKkMertua").remove();
      document.getElementById("divSuratNikah").remove();
      document.getElementById("divSuratNikahOrtu").remove();
      document.getElementById("divSuratNikahMertua").remove();
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
      document.getElementById("divKtpSaksi2").remove();
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
    dismissPecah();
    makeKeteranganRsElement();
    makeKtpAsliElement();
    makeKtpOrtuElement();
    makeKtpPelaporElement();
    makeKtpSaksi1Element();
    makeKtpSaksi2Element();
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


