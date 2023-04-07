<?php

namespace App\Http\Controllers;

use App\Models\Kritik;
use App\Http\Requests\StoreKritikRequest;
use App\Http\Requests\UpdateKritikRequest;
use Illuminate\Support\Facades\Auth;

class KritikController extends Controller
{
   public function addKritik(){

    request()->validate([
        // 'nama' => 'required' , 
        // 'email' => 'required' , 
        'topik' => 'required' , 
        'saran' => 'required' , 
    ]);
    
   
   $syifa =  Kritik::create([
        'nama' =>  Auth::user()->name ,   
        'email' => Auth::user()->email , 
        'topik' => request()->topik , 
        'saran' => request()->saran , 
    ]);

    if ($syifa) {
        return redirect('/')->with('success', 'Saran Berhasil Dikirim');
    }

   }
   public function destroy()
   {
       Kritik::find(request()->id)->delete();
       return redirect('/saran')->with('success','Saran Berhasil Dihapus');
   }
}
