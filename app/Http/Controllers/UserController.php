<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Berkas;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{


    public function profil($id){
        $data = User::with('berkas')->where('id',$id)->first();
        return view('pages.profil',[
            'datas' => $data , 
        ]);
    }

   public function addUser (){
    
    $berkas =  DB::table('berkas')->insert(
        [
            'ktp' => 'default' , 
            'ktp_ayah' => 'default' , 
            'ktp_ibu' => 'default' , 
            'kk' => 'default' , 
            'surat_nikah' => 'default' , 
        ]
        );

    $id = Berkas::orderBy('id','DESC')->get()->first();
    $tambah =  User::create([
        'berkas_id' => $id->id , 
        'name' => request()->nama , 
        'username' => request()->username , 
        'alamat' => request()->alamat , 
        'noHp' => request()->noHp , 
        'rt' => request()->rt , 
        'rw' => request()->rw , 
        'nik' => request()->nik , 
        'email' => request()->email , 
        'password' => bcrypt(request()->password) , 
        'pekerjaan' => "" , 
        'agama' => "" , 
        'status_perkawinan' => "-" , 
        'tempat_lahir' => "" , 
        'tanggal_lahir' => "2000-20-20" ,
        
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
   public function editUserProfil ($id){
    request()->validate(
        [
         'nama_lengkap' => 'required|string' , 
         'rt' => 'required|string'  , 
         'rw' => 'required|string'  , 
         'nik' => 'required|string'  , 
         'alamat' => 'required|string'  , 
         'email' => 'required|string'  , 
         'no_hp' => 'required|string|min:10|max:13' , 
         'pekerjaan' => 'required|string'  , 
         'agama' => 'required|string'  , 
         'status_perkawinan' => 'required|string'  , 
         'tempat_lahir' => 'required|string'  , 
         'tanggal_lahir' => 'required|string'  , 

        ]
     );

    $update =  User::where('id' , $id)->update([
        'name' => request()->nama_lengkap , 
        'rt' => request()->rt , 
        'rw' => request()->rw , 
        'nik' => request()->nik , 
        'alamat' => request()->alamat , 
        'email' => request()->email , 
        'noHp' => request()->no_hp , 
        'pekerjaan' =>request()->pekerjaan  , 
        'agama' => request()->agama  , 
        'status_perkawinan' =>request()->status_perkawinan  , 
        'tempat_lahir' => request()->tempat_lahir  , 
        'tanggal_lahir' => request()->tanggal_lahir  , 
    ]);


    if ($update) {
        return redirect('/profil')->with('success' , 'Update Berhasil');;

    } else {
        dd('gagal');
    }
   }

   public function editBerkas($id , $ket){
    $data = Berkas::where('id' , $id)->first();
    if ($ket == 'ktp') {
        if ($data->ktp == null) {

            $namaPp = uniqid().'.'.request()->file('berkas')->extension() ; 
            request()->file('berkas')->storeAs('ktp' , $namaPp , ['disk' => 'public']);
            $data =  Berkas::where('id' , $data->id)->update([
                'ktp' =>  $namaPp , 
            ]);
            return redirect('/profil'.'/'.$id)->with('success' , 'Update Berhasil');
    
        } else {
            Storage::disk('public')->delete('ktp/'.$data->ktp);
    
            $namaPp = uniqid().'.'.request()->file('berkas')->extension() ; 
            request()->file('berkas')->storeAs('ktp' , $namaPp , ['disk' => 'public']);
            $data =  Berkas::where('id' , $data->id)->update([
                'ktp' =>  $namaPp , 
            ]);
            return redirect('/profil'.'/'.$id)->with('success' , 'Update Berhasil');
    
        }
    }
    if ($ket == 'kk') {
        if ($data->kk == null) {

            $namaPp = uniqid().'.'.request()->file('berkas')->extension() ; 
            request()->file('berkas')->storeAs('kk' , $namaPp , ['disk' => 'public']);
            $data =  Berkas::where('id' , $data->id)->update([
                'kk' =>  $namaPp , 
            ]);
            return redirect('/profil'.'/'.$id)->with('success' , 'Update Berhasil');
    
        } else {
            Storage::disk('public')->delete('kk/'.$data->kk);
    
            $namaPp = uniqid().'.'.request()->file('berkas')->extension() ; 
            request()->file('berkas')->storeAs('kk' , $namaPp , ['disk' => 'public']);
            $data =  Berkas::where('id' , $data->id)->update([
                'kk' =>  $namaPp , 
            ]);
            return redirect('/profil'.'/'.$id)->with('success' , 'Update Berhasil');
    
        }
    }
    if ($ket == 'ktpAyah') {
        if ($data->ktp_ayah == null) {

            $namaPp = uniqid().'.'.request()->file('berkas')->extension() ; 
            request()->file('berkas')->storeAs('ktpAyah' , $namaPp , ['disk' => 'public']);
            $data =  Berkas::where('id' , $data->id)->update([
                'ktp_ayah' =>  $namaPp , 
            ]);
            return redirect('/profil'.'/'.$id)->with('success' , 'Update Berhasil');
    
        } else {
            Storage::disk('public')->delete('ktpAyah/'.$data->ktp_ayah);
    
            $namaPp = uniqid().'.'.request()->file('berkas')->extension() ; 
            request()->file('berkas')->storeAs('ktpAyah' , $namaPp , ['disk' => 'public']);
            $data =  Berkas::where('id' , $data->id)->update([
                'ktp_ayah' =>  $namaPp , 
            ]);
            return redirect('/profil'.'/'.$id)->with('success' , 'Update Berhasil');
    
        }
    }
    if ($ket == 'ktpIbu') {
        if ($data->ktp_ibu == null) {

            $namaPp = uniqid().'.'.request()->file('berkas')->extension() ; 
            request()->file('berkas')->storeAs('ktpIbu' , $namaPp , ['disk' => 'public']);
            $data =  Berkas::where('id' , $data->id)->update([
                'ktp_ibu' =>  $namaPp , 
            ]);
            return redirect('/profil'.'/'.$id)->with('success' , 'Update Berhasil');
    
        } else {
            Storage::disk('public')->delete('ktpIbu/'.$data->ktp_ibu);
    
            $namaPp = uniqid().'.'.request()->file('berkas')->extension() ; 
            request()->file('berkas')->storeAs('ktpIbu' , $namaPp , ['disk' => 'public']);
            $data =  Berkas::where('id' , $data->id)->update([
                'ktp_ibu' =>  $namaPp , 
            ]);
            return redirect('/profil'.'/'.$id)->with('success' , 'Update Berhasil');
    
        }
    }
    if ($ket == 'suratNikah') {
        if ($data->surat_nikah == null) {

            $namaPp = uniqid().'.'.request()->file('berkas')->extension() ; 
            request()->file('berkas')->storeAs('suratNikah' , $namaPp , ['disk' => 'public']);
            $data =  Berkas::where('id' , $data->id)->update([
                'surat_nikah' =>  $namaPp , 
            ]);
            return redirect('/profil'.'/'.$id)->with('success' , 'Update Berhasil');
    
        } else {
            Storage::disk('public')->delete('suratNikah/'.$data->surat_nikah);
    
            $namaPp = uniqid().'.'.request()->file('berkas')->extension() ; 
            request()->file('berkas')->storeAs('suratNikah' , $namaPp , ['disk' => 'public']);
            $data =  Berkas::where('id' , $data->id)->update([
                'surat_nikah' =>  $namaPp , 
            ]);
            return redirect('/profil'.'/'.$id)->with('success' , 'Update Berhasil');
    
        }
    }

    
        
   }
   public function editPp ($id){
   
       
       $getting = User::where('id',$id)->first();
       $gambar = Berkas::where('id',$getting->id)->first(); ; 
       
    if ($gambar->foto_profil != null) {
        // Storage::disk('public')->delete('cover/'.$data->cover);

        $namaPp = uniqid().'.'.request()->file('fotoProfil')->extension() ; 
        request()->file('fotoProfil')->storeAs('fotoProfil' , $namaPp , ['disk' => 'public']);
        $gambar =  Berkas::where('id' , $gambar->id)->update([
            'foto_profil' =>  $namaPp , 
        ]);
        return redirect('/profil'.'/'.$id)->with('success' , 'Update Berhasil');

    } else {
        Storage::disk('public')->delete('fotoProfil/'.$gambar->foto_profil);

        $namaPp = uniqid().'.'.request()->file('fotoProfil')->extension() ; 
        request()->file('fotoProfil')->storeAs('fotoProfil' , $namaPp , ['disk' => 'public']);
        $gambar =  Berkas::where('id' , $gambar->id)->update([
            'foto_profil' =>  $namaPp , 
        ]);
        return redirect('/profil'.'/'.$id)->with('success' , 'Update Berhasil');

    }
    // else {
    //     $adding = User::create([
    //         "foto_profil" => request()->fotoProfil , 
    //     ]);
    //     return redirect('/profil')->with('success' , 'tambah Berhasil');;

    // }
    
   }

   public function destroy(Request $request)
{
    User::find($request->id)->delete();
    return redirect('/user')->with('success','Akun Berhasil Dihapus');
}
}
