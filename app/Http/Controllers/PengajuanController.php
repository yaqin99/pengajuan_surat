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

    public function sktm (){

        request()->validate(
           [
            'ktp' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
            'kk' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
            'keterangan' => 'string|max:200|nullable' , 
           ]
        );
        $ktp = request()->file('ktp')->storeAs('ktp' , uniqid().'.'.request()->file('ktp')->extension() , ['disk' => 'public']);
        $kk = request()->file('kk')->storeAs('kk' , uniqid().'.'.request()->file('kk')->extension() , ['disk' => 'public']);
        $link = Storage::url($ktp);
        $linkKk = Storage::url($kk);

        $input =  Jenis::create([
            'nama_surat' => 'Surat Keterangan Tidak Mampu' , 
            'ktp' => $link , 
            'kk' =>  $linkKk , 
            'keterangan' => request()->keterangan ,
        ]);

        // dd(Auth::user()->id);
        $pengajuan = Pengajuan::create([
            'jenis_id' => $input->id , 
            'user_id' => Auth::user()->id , 
            'tanggal' => Carbon::now(),
        ]);

        if ($input && $pengajuan) {
          redirect()->to('/')->send()->with('berhasil' , 'Pengajuan Anda Berhasil');
        } else {
            dd('gagal');
        }
    }
}
