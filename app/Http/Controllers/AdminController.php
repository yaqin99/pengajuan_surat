<?php

namespace App\Http\Controllers;

use App\Events\PengajuanSurat;
use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Pengajuan;
use App\Models\Kritik;
use App\Models\User;

class AdminController extends Controller
{
   
    public function index(){

        $data = Pengajuan::with(['user'])->SearchPengajuan()->paginate(10);
        
        return view('admin.pages.pengajuan' , [
            'data' => $data ,
        ]);

    }

    public function adminData (){

    
        // $this->authorize('superAdmin');
        
        return view('admin.pages.admin' , [
            'data' => Admin::SearchAdmin()->paginate(30) ,
        ]);
    }
    public function userData (){
        $data = User::SearchUser()->paginate(30);
        return view('admin.pages.user' , [
            'data' => $data ,
        ]);
    }

    public function kritikData (){
        $data = Kritik::paginate(30);
        return view('admin.pages.saran' , [
            'data' => $data ,
        ]);
    }

    public function editUser($id){
        $data = User::where('id' , $id)->first();
        return view('admin.pages.editUser' , [
            'data' => $data ,
        ]);
    }

    public function editAdmin($id){
        $data = Admin::where('id' , $id)->first();
        return view('admin.pages.editAdmin' , [
            'data' => $data ,
        ]);
    }

    public function addAdmin (){
        request()->validate(
            [
             'nama' => 'required|string' ,  
             'email' => 'required|string'  , 
             'username' => 'required|string' , 
             'password' => 'required|string' , 
            ]
         );
    
       
    
        $tambah =  Admin::create([
            'name' => request()->nama , 
            'email' => request()->email , 
            'username' => request()->username , 
            'password' => bcrypt(request()->password) , 
            'isAdmin' => 0 , 
            
        ]);
    
    
        if ($tambah) {
            return redirect('/akunAdmin')->with('success' , 'Tambah Admin Berhasil');;
    
        } else {
            dd('gagal');
        }
       }

    public function edit ($id){
        request()->validate(
            [
             'nama' => 'required|string' , 
             'email' => 'required|string'  , 
            //  'username' => 'required|string'  , 
            //  'password' => 'required|string'  , 
            
            ]
         );
    
        $update =  Admin::where('id' , $id)->update([
            'name' => request()->nama , 
            'email' => request()->email , 
            // 'username' => request()->rw , 
            // 'password' => request()->nik , 
            
    
        ]);
    
    
        if ($update) {
            return redirect('/akunAdmin')->with('success' , 'Update Berhasil');;
    
        } else {
            dd('gagal');
        }
       }
    

    public function destroy()
    {
        Admin::find(request()->id)->delete();
        return redirect('/akunAdmin')->with('success','Akun Berhasil Dihapus');
    }
}
