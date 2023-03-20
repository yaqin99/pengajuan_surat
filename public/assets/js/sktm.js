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

