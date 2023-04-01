<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\Jenis;
use App\Http\Requests\StorePengajuanRequest;
use App\Http\Requests\UpdatePengajuanRequest;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PengajuanController extends Controller
{

    public function sktm ($judul){

        if ($judul == 'Surat Keterangan Kelahiran') {
            request()->validate(
               [
                'ktp' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'ktpIbu' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'ktpPelapor' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'saksi1' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'saksi2' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'kk' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'kelahiranBidan' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'suratNikah' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'noHp' => 'required|string|min:10|max:13' , 
                'keterangan' => 'string|max:200|nullable' , 
               ]
            );

        $uniqKtp = uniqid().'.'.request()->file('ktp')->extension() ; 
        $uniqKtpIbu = uniqid().'.'.request()->file('ktpIbu')->extension() ; 
        $uniqPelapor = uniqid().'.'.request()->file('ktpPelapor')->extension() ; 
        $uniqSaksi1 =  uniqid().'.'.request()->file('saksi1')->extension() ; 
        $uniqSaksi2 = uniqid().'.'.request()->file('saksi2')->extension() ;    
        $uniqBidan = uniqid().'.'.request()->file('kelahiranBidan')->extension() ; 
        $uniqNikah = uniqid().'.'.request()->file('suratNikah')->extension() ; 
        $uniqKk = uniqid().'.'.request()->file('kk')->extension() ; 

        $ktp = request()->file('ktp')->storeAs('ktp' ,  $uniqKtp, ['disk' => 'public']);
        $ktpIbu = request()->file('ktpIbu')->storeAs('ktpIbu' , $uniqKtpIbu , ['disk' => 'public']);
        $ktpPelapor = request()->file('ktpPelapor')->storeAs('ktpPelapor' , $uniqPelapor , ['disk' => 'public']);
        $saksi1 = request()->file('saksi1')->storeAs('saksi1' , $uniqSaksi1, ['disk' => 'public']);
        $saksi2 = request()->file('saksi2')->storeAs('saksi2' , $uniqSaksi2 , ['disk' => 'public']);
        $kelahiranBidan = request()->file('kelahiranBidan')->storeAs('kelahiranBidan' , $uniqBidan , ['disk' => 'public']);
        $suratNikah = request()->file('suratNikah')->storeAs('suratNikah' , $uniqNikah , ['disk' => 'public']);
        $kk = request()->file('kk')->storeAs('kk' , $uniqKk , ['disk' => 'public']);
       
        // $link = Storage::url($ktp);
        // $linkIbu = Storage::url($ktpIbu);
        // $linkPelapor = Storage::url($ktpPelapor);
        // $linkSaksi1 = Storage::url($saksi1);
        // $linkSaksi2 = Storage::url($saksi2);
        // $linkBidan = Storage::url($kelahiranBidan);
        // $linkNikah = Storage::url($suratNikah);
        // $linkKk = Storage::url($kk);

        $input =  Jenis::create([
            'nama_surat' => $judul , 
            'ktp' => $uniqKtp , 
            'ktp2' => $uniqKtpIbu , 
            'ktp_pelapor' => $uniqPelapor , 
            'ktp_saksi1' => $uniqSaksi1 , 
            'ktp_saksi2' => $uniqSaksi2 , 
            'surat_keterangan' => $uniqBidan , 
            'surat_nikah' => $uniqNikah , 
            'no_pelapor' => request()->noHp , 
            'kk' =>  $uniqKk , 
            'keterangan' => request()->keterangan ,
        ]);

        $pengajuan = Pengajuan::create([
            'jenis_id' => $input->id , 
            'user_id' => Auth::user()->id , 
            'tanggal' => Carbon::now(),
        ]);   

        if ($input && $pengajuan) {
           return  redirect()->to('/')->send()->with('berhasil' , 'Pengajuan Anda Berhasil');
          } else {
              dd('gagal');
          }

        }



        if ($judul == 'Surat Keterangan Kematian') {
            request()->validate(
               [
                'keteranganRs' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'ktpAsli' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'ktp' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'kk' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'kkOrtu' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'ktpPelapor' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'saksi1' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'noHp' => 'required|string|min:10|max:13' , 
                'keterangan' => 'string|max:200|nullable' , 
               ]
            );


        $uniqRs = uniqid().'.'.request()->file('keteranganRs')->extension() ; 
        $uniqKtp = uniqid().'.'.request()->file('ktp')->extension() ; 
        $uniqKtpAsli = uniqid().'.'.request()->file('ktpAsli')->extension() ; 
        $uniqKk = uniqid().'.'.request()->file('kk')->extension() ; 
        $uniqKkOrtu =  uniqid().'.'.request()->file('kkOrtu')->extension() ; 
        $uniqPelapor = uniqid().'.'.request()->file('ktpPelapor')->extension() ; 
        $uniqSaksi1 = uniqid().'.'.request()->file('saksi1')->extension() ; 


        $keteranganRs = request()->file('keteranganRs')->storeAs('keteranganRs' , $uniqRs , ['disk' => 'public']);
        $ktp = request()->file('ktp')->storeAs('ktp' , $uniqKtp , ['disk' => 'public']);
        $ktpAsli = request()->file('ktpAsli')->storeAs('ktpAsli' , $uniqKtpAsli , ['disk' => 'public']);
        $kk = request()->file('kk')->storeAs('kk' , $uniqKk , ['disk' => 'public']);
        $kkOrtu = request()->file('kkOrtu')->storeAs('kkOrtu' , $uniqKkOrtu , ['disk' => 'public']);
        $ktpPelapor = request()->file('ktpPelapor')->storeAs('ktpPelapor' , $uniqPelapor , ['disk' => 'public']);
        $saksi1 = request()->file('saksi1')->storeAs('saksi1' , $uniqSaksi1 , ['disk' => 'public']);
       
        // $link = Storage::url($ktp);
        // $linkAsli = Storage::url($ktpAsli);
        // $linkPelapor = Storage::url($ktpPelapor);
        // $linkSaksi1 = Storage::url($saksi1);
        // $linkKk = Storage::url($kk);
        // $linkOrtu = Storage::url($kkOrtu);
        // $linkRs = Storage::url($keteranganRs);

        $input =  Jenis::create([
            'nama_surat' => $judul , 
            'ktp' => $uniqKtp , 
            'ktp2' => $uniqKtpAsli , 
            'kk' =>  $uniqKk , 
            'kk2' =>  $uniqKkOrtu , 
            'ktp_pelapor' => $uniqPelapor , 
            'ktp_saksi1' => $uniqSaksi1 , 
            'surat_keterangan' => $uniqRs , 
            'no_pelapor' => request()->noHp , 
            'keterangan' => request()->keterangan ,
        ]);

        $pengajuan = Pengajuan::create([
            'jenis_id' => $input->id , 
            'user_id' => Auth::user()->id , 
            'tanggal' => Carbon::now(),
        ]);   

        if ($input && $pengajuan) {
           return  redirect()->to('/')->send()->with('berhasil' , 'Pengajuan Anda Berhasil');
          } else {
              dd('gagal');
          }

        }


        if ($judul == 'Surat Keterangan Kehilangan') {
            request()->validate(
               [
                'suratPolsek' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                
                'ktp' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'kk' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
               
                'keterangan' => 'string|max:200|nullable' , 
               ]
            );

        $uniqPolsek = uniqid().'.'.request()->file('suratPolsek')->extension() ; 
        $uniqKtp = uniqid().'.'.request()->file('ktp')->extension()  ; 
        $uniqKk = uniqid().'.'.request()->file('kk')->extension() ; 
        $suratPolsek = request()->file('suratPolsek')->storeAs('suratPolsek' , $uniqPolsek , ['disk' => 'public']);
        $ktp = request()->file('ktp')->storeAs('ktp' , $uniqKtp, ['disk' => 'public']);
        $kk = request()->file('kk')->storeAs('kk' , $uniqKk , ['disk' => 'public']);
       
       
        // $link = Storage::url($ktp);
       
        // $linkKk = Storage::url($kk);
        // $linkPolsek = Storage::url($suratPolsek);

        $input =  Jenis::create([
            'nama_surat' => $judul , 
            'ktp' => $uniqKtp , 
            
            'kk' =>  $uniqKk , 
          
            'surat_keterangan' => $uniqPolsek , 
             
            'keterangan' => request()->keterangan ,
        ]);

        $pengajuan = Pengajuan::create([
            'jenis_id' => $input->id , 
            'user_id' => Auth::user()->id , 
            'tanggal' => Carbon::now(),
        ]);   

        if ($input && $pengajuan) {
           return  redirect()->to('/')->send()->with('berhasil' , 'Pengajuan Anda Berhasil');
          } else {
              dd('gagal');
          }

        }


        if ($judul == 'Surat Keterangan Pindah Datang atau Pindah Keluar') {
            request()->validate(
               [
                'pindah' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'kuasa' => 'max:30000|mimes:pdf,png,jpg,jpeg' , 
                
                'ktp' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'kk' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
               
                'keterangan' => 'string|max:200|nullable' , 
               ]
            );

        $uniqPindah = uniqid().'.'.request()->file('pindah')->extension() ; 
        $uniqKuasa = uniqid().'.'.request()->file('kuasa')->extension() ; 
        $uniqKtp = uniqid().'.'.request()->file('ktp')->extension()  ; 
        $uniqKk = uniqid().'.'.request()->file('kk')->extension() ; 

        $suratPindah = request()->file('pindah')->storeAs('pindah' , $uniqPindah , ['disk' => 'public']);
        $suratKuasa = request()->file('kuasa')->storeAs('kuasa' , $uniqKuasa , ['disk' => 'public']);
        $ktp = request()->file('ktp')->storeAs('ktp' , $uniqKtp, ['disk' => 'public']);
        $kk = request()->file('kk')->storeAs('kk' , $uniqKk , ['disk' => 'public']);
       
       
       
        $input =  Jenis::create([
            'nama_surat' => $judul , 
            'ktp' => $uniqKtp , 
            
            'kk' =>  $uniqKk , 
          
            'surat_keterangan' => $uniqPindah , 

            //ini karena databasenya error entah knp
            'surat_nikah3' => $uniqKuasa , 
             
            'keterangan' => request()->keterangan ,
        ]);

        $pengajuan = Pengajuan::create([
            'jenis_id' => $input->id , 
            'user_id' => Auth::user()->id , 
            'tanggal' => Carbon::now(),
        ]);   

        if ($input && $pengajuan) {
           return  redirect()->to('/')->send()->with('berhasil' , 'Pengajuan Anda Berhasil');
          } else {
              dd('gagal');
          }

        }


         
        request()->validate(
            [
             'ktp' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
             'kk' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
             'keterangan' => 'string|max:200|nullable' , 
            ]
         );
        $uniqKtp = uniqid().'.'.request()->file('ktp')->extension() ;
        $uniqKk = uniqid().'.'.request()->file('kk')->extension() ; 
        $ktp = request()->file('ktp')->storeAs('ktp' , $uniqKtp, ['disk' => 'public']);
        $kk = request()->file('kk')->storeAs('kk' , $uniqKk , ['disk' => 'public']);
        
        
       

        $input =  Jenis::create([
            'nama_surat' => $judul , 
            'ktp' => $uniqKtp , 
            'kk' =>  $uniqKk , 
            'keterangan' => request()->keterangan ,
        ]);

        // dd(Auth::user()->id);
        $pengajuan = Pengajuan::create([
            'jenis_id' => $input->id , 
            'user_id' => Auth::user()->id , 
            'tanggal' => Carbon::now(),
        ]);
        if ($input && $pengajuan) {
          return redirect()->to('/')->send()->with('berhasil' , 'Pengajuan Anda Berhasil');
        } else {
            dd('gagal');
        }
    }



    public function deletePengajuan (){

       
       $data =  DB::table('jenis')->whereIn('id', request()->ids)->get();
       foreach ($data as $no) {
        
        if ($no->nama_surat  == 'Surat Keterangan Kelahiran') {
            Storage::delete('/public/ktp/'.$no->ktp);
            Storage::delete('/public/ktpIbu/'.$no->ktp2);
            Storage::delete('/public/kk/'.$no->kk);
            Storage::delete('/public/ktpPelapor/'.$no->ktp_pelapor);
            Storage::delete('/public/saksi1/'.$no->ktp_saksi1);
            Storage::delete('/public/saksi2/'.$no->ktp_saksi2);
            Storage::delete('/public/suratNikah/'.$no->surat_nikah);
            Storage::delete('/public/kelahiranBidan/'.$no->surat_keterangan);
        }

        if ($no->nama_surat  == 'Surat Keterangan Kematian') {
            Storage::delete('/public/ktp/'.$no->ktp);
            Storage::delete('/public/ktpAsli/'.$no->ktp2);
            Storage::delete('/public/ktpPelapor/'.$no->ktp_pelapor);
            Storage::delete('/public/saksi1/'.$no->ktp_saksi1);
            Storage::delete('/public/kk/'.$no->kk);
            Storage::delete('/public/kkOrtu/'.$no->kk2);
            Storage::delete('/public/keteranganRs/'.$no->surat_keterangan);
        }
                 
        if ($no->nama_surat  == 'Surat Keterangan Kehilangan') {
            Storage::delete('/public/ktp/'.$no->ktp);
            
            Storage::delete('/public/kk/'.$no->kk);
          
            Storage::delete('/public/suratPolsek/'.$no->surat_keterangan);
        }

        if ($no->nama_surat  == 'Surat Keterangan Pindah Datang atau Pindah Keluar') {
            Storage::delete('/public/ktp/'.$no->ktp);
            
            Storage::delete('/public/kk/'.$no->kk);
          
            Storage::delete('/public/pindah/'.$no->surat_keterangan);
            Storage::delete('/public/kuasa/'.$no->surat_nikah3);
        }
                 
        Storage::delete('/public/ktp/'.$no->ktp);
        Storage::delete('/public/kk/'.$no->kk);
    
       }
       
       $hapus =  Pengajuan::destroy(request()->ids);
       $delete =  DB::table('jenis')->whereIn('id', request()->ids)->delete();
       
       if ($hapus && $delete) {
           return redirect('/admin')->with('delete' , 'Berhasil Menghapus Data');
       } else {
        dd('gagal');
       }

    }
}
