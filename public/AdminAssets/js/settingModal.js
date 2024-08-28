function userShow (data , berkas){
    console.log(berkas)
    $("#modalUser").attr('action' , `/editUser/${data.id}`);
    $("#modalNama").html(data.name);
    $("#modalAlamat").val(data.alamat);
    $("#modalRt").val(data.rt);
    $("#modalRw").val(data.rw);
    $("#modalNik").val(data.nik);
    $("#modalNoHp").val(data.noHp);
    $("#modalPekerjaan").val(data.pekerjaan);
    $("#modalAgama").val(data.agama);
    $("#modalStatus").val(data.status_perkawinan);
    $("#modalTempat").val(data.tempat_lahir);
    $("#modalTanggal").val(data.tanggal_lahir);
    $("#modalEmail").val(data.email);
    $("#dataKtp").val(data.berkas.ktp);
    $("#viewKtp").attr("href" , `{{ asset('/storage/ktp/${data.berkas.ktp}') }} ` );
    $("#dataKk").val(data.berkas.kk);
    $("#viewKk").attr("href" , `{{ asset('/storage/kk/${data.berkas.kk}') }} ` );
    $("#dataKtpIbu").val(data.berkas.ktp_ibu);
    $("#viewKtpIbu").attr("href" , `{{ asset('/storage/ktp_ibu/${data.berkas.ktp_ibu}') }} ` );
    $("#dataKtpAyah").val(data.berkas.ktp_ayah);
    $("#viewKtpAyah").attr("href" , `{{ asset('/storage/ktp_ayah/${data.berkas.ktp_ayah}') }} ` );
    $("#dataNikah").val(data.berkas.surat_nikah);
    $("#viewNikah").attr("href" , `{{ asset('/storage/surat_nikah/${data.berkas.surat_nikah}') }} ` );
    
}

function settingMasukan (id){
    $("#formMasukan").attr('action' , `/admin/editMasukan/${id}`);

}