
  
  

   
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
      input.setAttribute('name' , 'ktpOrtu');
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
      document.getElementById("form_input").setAttribute('action' , '/suratKehilangan');
   
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
      makeSuratNikahElement();
      makeKtpPelaporElement();
      makeKtpIbuElement();
      makeKtpSaksi1Element();
      makeKtpSaksi2Element();
      makeNoHpElement();
     
      document.getElementById('judulModal').innerHTML =  document.getElementById('kelahiran').innerHTML ;
      document.getElementById("form_input").setAttribute('action' , '/suratKelahiran');
   
    }
  
  
  
    const dismissPindah = () => {
      if (document.getElementById("divPindah") != null) {
        document.getElementById('ktpAyah').innerHTML = 'Foto Copy KTP ' ;
        document.getElementById('labelKk').innerHTML = 'Foto Copy KK' ;
        document.getElementById("divPindah").remove();
        document.getElementById("divPindahKuasa").remove();
       
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
      document.getElementById("form_input").setAttribute('action' , '/suratKematian');
   
    }
  
  
    function dismiss (){
    document.getElementById("ktp").value = "";
    document.getElementById("kk").value = "";
    document.getElementById("confirm_button").setAttribute('disabled' , 'true');
  
  }
  
  
  