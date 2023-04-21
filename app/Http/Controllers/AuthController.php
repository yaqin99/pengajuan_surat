<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ; 
use App\Models\User;

class AuthController extends Controller
{
    public function register(){
        return view('auth.registerUser');
    }
    public function registerUserMethod(){
        request()->validate([
            'nama' => 'required' , 
            'username' => 'required' , 
            'email' => 'required',
            'password' => 'required',
             
        ]);
        
       
        $dataAdmin = User::select('*')->where('name' , request()->nama)->first();
        $email = User::select('*')->where('email' , request()->email)->first();
        
        if ($dataAdmin  
        ) {
            return back()->with('exist' , 'Admin Sudah Ada');
        }
        if ($email  
        ) {
          
            return back()->with('email' , 'Email Sudah Ada');
        }

        $password = bcrypt(request()->password);

        $data = User::create([
           'name' => request()->nama , 
           'email' => request()->email , 
           'username' => request()->username , 
           'password' => $password , 
        ]);
        if($data){
            return redirect('/login')->with('success' , 'Admin Berhasil di Tambahkan');
        } else {
            return back()->with('fail' , 'Data Gagal di Tambahkan');
        }
    }
    



    public function loginView(){
        return view('auth.loginAdmin');
    }
    


    public function loginMethod(Request $req){

        $req->validate([
            'username' => 'required' , 
            'password' => 'required' , 
        ]); 
       
        
        if (Auth::guard('admin')->attempt(['username' => $req->username , 'password' => $req->password] , $req->remember)) {
            request()->session()->regenerate();
            return redirect()->intended('/admin')->with('success' , 'Login Berhasil');
        } 
    }

    public function userView(){
        return view('auth.loginUser');
    } 


    public function userLogin (Request $req){

        $req->validate([
            'username' => 'required' , 
            'password' => 'required' , 
        ]); 

        
        // $nama = User::select('name')->where('username' , $req->username)->first();
        if (Auth::guard('web')->attempt(['username' => $req->username , 'password' => $req->password] , $req->remember)) {
            request()->session()->regenerate();
 
            return redirect()->intended('/')->with('success' , 'Selamat Datang Kembali');;
        } else {
            return back()->with('gagal' , 'Login Gagal');
        }

        if (Auth::viaRemember()) {

            request()->session()->regenerate();

            return redirect()->intended('/');
        }

        
    }


    public function logout(){
        Auth::logout();
        //$request dan request() itu sama aja 
    request()->session()->invalidate();
 
    request()->session()->regenerateToken();
 
    return redirect('/login');
     }

    public function logoutAdmin(){
        Auth::guard('admin')->logout();
        //$request dan request() itu sama aja 
    request()->session()->invalidate();
 
    request()->session()->regenerateToken();
 
    return redirect('/loginAdmin');
     }
}
