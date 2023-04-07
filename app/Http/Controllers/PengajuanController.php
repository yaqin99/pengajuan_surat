<?php

namespace App\Http\Controllers;

use App\Events\PengajuanSurat;
use App\Events\SuratDone;
use App\Models\Pengajuan;
use App\Models\Jenis;
use App\Http\Requests\StorePengajuanRequest;
use App\Http\Requests\UpdatePengajuanRequest;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class PengajuanController extends Controller
{

    public function sktm ($judul){

        $batas = 8000000 ; 
        if ($judul == 'Surat Keterangan Pecah KK') {
            if (request()->file('ijazah')->getSize() > $batas || request()->file('ijazahPerempuan')->getSize() > $batas  || request()->file('input_ktpWanita')->getSize() > $batas || request()->file('kkMertua')->getSize() > $batas || request()->file('suratNikah')->getSize() > $batas || request()->file('suratNikahOrtu')->getSize() > $batas || request()->file('suratNikahMertua')->getSize() > $batas) {
                return redirect('/')->with('info', 'Pengajuan Gagal, Silahkan Periksa File Anda');
            }
            request()->validate(
               [
                'ijazah' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'ijazahPerempuan' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'ktp' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'input_ktpWanita' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'kk' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'kkMertua' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'suratNikah' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'suratNikahOrtu' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'suratNikahMertua' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
                'noHp' => 'required|string|min:10|max:13' , 
                'keterangan' => 'string|max:200|nullable' , 
               ]
            );

        $uniqIjazah = uniqid().'.'.request()->file('ijazah')->extension() ; 
        $uniqIjazahPerempuan = uniqid().'.'.request()->file('ijazahPerempuan')->extension() ; 
        $uniqKtp = uniqid().'.'.request()->file('ktp')->extension() ; 
        $uniqKtpWanita = uniqid().'.'.request()->file('input_ktpWanita')->extension() ; 
        $uniqKk = uniqid().'.'.request()->file('kk')->extension() ; 
        $uniqKkMertua =  uniqid().'.'.request()->file('kkMertua')->extension() ; 
        $uniqSuratNikah = uniqid().'.'.request()->file('suratNikah')->extension() ;    
        $uniqSuratNikahOrtu = uniqid().'.'.request()->file('suratNikahOrtu')->extension() ; 
        $uniqSuratNikahMertua = uniqid().'.'.request()->file('suratNikahMertua')->extension() ; 

        request()->file('ijazah')->storeAs('ijazah' , $uniqIjazah , ['disk' => 'public']);
        request()->file('ijazahPerempuan')->storeAs('ijazahPerempuan' , $uniqIjazahPerempuan , ['disk' => 'public']);
        request()->file('ktp')->storeAs('ktp' ,  $uniqKtp, ['disk' => 'public']);
        request()->file('input_ktpWanita')->storeAs('input_ktpWanita' , $uniqKtpWanita , ['disk' => 'public']);
        request()->file('kk')->storeAs('kk' , $uniqKk , ['disk' => 'public']);
        request()->file('kkMertua')->storeAs('kkMertua' , $uniqKkMertua, ['disk' => 'public']);
        request()->file('suratNikah')->storeAs('suratNikah' , $uniqSuratNikah , ['disk' => 'public']);
        request()->file('suratNikahOrtu')->storeAs('suratNikahOrtu' , $uniqSuratNikahOrtu , ['disk' => 'public']);
        request()->file('suratNikahMertua')->storeAs('suratNikahMertua' , $uniqSuratNikahMertua , ['disk' => 'public']);
     
        $input =  Jenis::create([
            'nama_surat' => $judul , 
            'ktp' => $uniqKtp , 
            'ktp2' => $uniqKtpWanita , 
            'kk' =>  $uniqKk , 
            'kk2' =>  $uniqKkMertua , 
            'surat_nikah' => $uniqSuratNikah , 
            'surat_nikah2' => $uniqSuratNikahOrtu , 
            'surat_nikah3' => $uniqSuratNikahMertua , 
            'surat_keterangan' => $uniqIjazah , 
            'ktp_saksi2' => $uniqIjazahPerempuan , 
            'no_pelapor' => request()->noHp , 
            'keterangan' => request()->keterangan ,
        ]);

        $pengajuan = Pengajuan::create([
            'jenis_id' => $input->id , 
            'user_id' => Auth::user()->id , 
            'tanggal' => Carbon::now(),
        ]);   

        if ($input && $pengajuan) {
            event(new PengajuanSurat('Pengajuan Surat Baru!'));
            return redirect('/')->with('success', 'Pengajuan Anda Berhasil');
          } else {
            return redirect('/')->with('info', 'Pengajuan Gagal, Silahkan Periksa File Anda');
          }

        }

        if ($judul == 'Surat Keterangan Kelahiran') {
            if (request()->file('ktpIbu')->getSize() > $batas || request()->file('ktpPelapor')->getSize() > $batas  || request()->file('saksi1')->getSize() > $batas || request()->file('saksi2')->getSize() > $batas || request()->file('kelahiranBidan')->getSize() > $batas || request()->file('suratNikah')->getSize() > $batas) {
                return redirect('/')->with('info', 'Pengajuan Gagal, Silahkan Periksa File Anda');
            }
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
            event(new PengajuanSurat('Pengajuan Surat Baru!'));
            return redirect('/')->with('success', 'Pengajuan Anda Berhasil');
          } else {
            return redirect('/')->with('info', 'Pengajuan Gagal, Silahkan Periksa File Anda');
          }

        }



        if ($judul == 'Surat Keterangan Kematian') {
            if (request()->file('keteranganRs')->getSize() > $batas || request()->file('ktpAsli')->getSize() > $batas  || request()->file('kkOrtu')->getSize() > $batas || request()->file('ktpPelapor')->getSize() > $batas || request()->file('saksi1')->getSize() > $batas) {
                return redirect('/')->with('info', 'Pengajuan Gagal, Silahkan Periksa File Anda');
            }
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
            event(new PengajuanSurat('Pengajuan Surat Baru!'));
            return redirect('/')->with('success', 'Pengajuan Anda Berhasil');
          } else {
            return redirect('/')->with('info', 'Pengajuan Gagal, Silahkan Periksa File Anda');
          }

        }


        if ($judul == 'Surat Keterangan Kehilangan') {
            if (request()->file('suratPolsek')->getSize() > $batas  ) {
                return redirect('/')->with('info', 'Pengajuan Gagal, Silahkan Periksa File Anda');
            }
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
            event(new PengajuanSurat('Pengajuan Surat Baru!'));
            return redirect('/')->with('success', 'Pengajuan Anda Berhasil');
          } 
        if (!$input || !$pengajuan) {
            return redirect('/')->with('info', 'Pengajuan Gagal, Silahkan Periksa File Anda');
          } 

        }


        if ($judul == 'Surat Keterangan Pindah Datang atau Pindah Keluar') {
            
                    if (request()->file('pindah')->getSize() > $batas || request()->file('kuasa')->getSize() > $batas  ) {
                        return redirect('/')->with('info', 'Pengajuan Gagal, Silahkan Periksa File Anda');
                    }
                    
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
            event(new PengajuanSurat('Pengajuan Surat Baru!'));
            return redirect('/')->with('success', 'Pengajuan Anda Berhasil');
          } else {
            return redirect('/')->with('info', 'Pengajuan Gagal, Silahkan Periksa File Anda');
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

            
            
            event(new PengajuanSurat('Pengajuan Surat Baru!'));
            return redirect('/')->with('success', 'Pengajuan Anda Berhasil');
        //   return redirect()->to('/')->send()->with('success' , 'Pengajuan Anda Berhasil');
        } else {
            return redirect('/')->with('info', 'Pengajuan Gagal, Silahkan Periksa File Anda');
        }
    }



    public function deletePengajuan (){

        if (request()->ids == []) {
           return redirect('/admin')->with('warning', 'Anda Belum Menyeleksi Surat');
        }

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
        if ($no->nama_surat  == 'Surat Keterangan Pecah KK') {
            Storage::delete('/public/ktp/'.$no->ktp);
            Storage::delete('/public/input_ktpWanita/'.$no->ktp2);
            Storage::delete('/public/kk/'.$no->kk);
            Storage::delete('/public/kkMertua/'.$no->kk2);
            Storage::delete('/public/suratNikah/'.$no->surat_nikah);
            Storage::delete('/public/suratNikahOrtu/'.$no->surat_nikah2);
            Storage::delete('/public/suratNikahMertua/'.$no->surat_nikah3);
            
            Storage::delete('/public/ijazah/'.$no->surat_keterangan);
            Storage::delete('/public/ijazahPerempuan/'.$no->ktp_saksi2);
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
        event(new SuratDone('Surat Sudah Selesai'));

        return redirect('/admin')->with('success', 'Surat Sudah Selesai');
       } else {
        
       }

    }
}
