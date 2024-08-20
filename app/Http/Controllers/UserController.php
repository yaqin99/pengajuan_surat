<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{


    public function profil(){
        return view('pages.profil',[

        ]);
    }

   public function addUser (){
    request()->validate(
        [
         'nama' => 'required|string' , 
         'rt' => 'required|string'  , 
         'rw' => 'required|string'  , 
         'nik' => 'required|string'  , 
         'alamat' => 'required|string'  , 
         'email' => 'required|string'  , 
         'noHp' => 'required|string|min:10|max:13' , 
         'username' => 'required|string' , 
         'password' => 'required|string' , 
        ]
     );

   

    $tambah =  User::create([
        'name' => request()->nama , 
        'username' => request()->username , 
        'alamat' => request()->alamat , 
        'noHp' => request()->noHp , 
        'rt' => request()->rt , 
        'rw' => request()->rw , 
        'nik' => request()->nik , 
        'email' => request()->email , 
        'password' => bcrypt(request()->password) , 
        
    ]);


    if ($tambah) {
        return redirect('/user')->with('success' , 'Tambah User Berhasil');;

    } else {
        dd('gagal');
    }
   }


   public function edit ($id){
    request()->validate(
        [
         'nama' => 'required|string' , 
         'rt' => 'required|string'  , 
         'rw' => 'required|string'  , 
         'nik' => 'required|string'  , 
         'alamat' => 'required|string'  , 
         'email' => 'required|string'  , 
         'noHp' => 'required|string|min:10|max:13' , 
        ]
     );

    $update =  User::where('id' , $id)->update([
        'name' => request()->nama , 
        'rt' => request()->rt , 
        'rw' => request()->rw , 
        'nik' => request()->nik , 
        'alamat' => request()->alamat , 
        'email' => request()->email , 
        'noHp' => request()->noHp , 

    ]);


    if ($update) {
        return redirect('/user')->with('success' , 'Update Berhasil');;

    } else {
        dd('gagal');
    }
   }

   public function destroy(Request $request)
{
    User::find($request->id)->delete();
    return redirect('/user')->with('success','Akun Berhasil Dihapus');
}
}
