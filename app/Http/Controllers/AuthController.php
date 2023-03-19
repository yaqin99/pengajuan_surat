<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ; 

class AuthController extends Controller
{
    public function loginView(){
        return view('auth.loginAdmin');
    }
    
    public function loginMethod(Request $req){

        $req->validate([
            'username' => 'required' , 
            'password' => 'required' , 
        ]); 
       
        
        if (Auth::guard('admin')->attempt($req->only(['username' => $req->username , 'password' => $req->password]))) {
            request()->session()->regenerate();
 
            return redirect()->intended('/');
        }

        dd('gagal');
    }

    public function userView(){
        return view('auth.loginUser');
    } 
    public function userLogin (Request $req){

        $req->validate([
            'username' => 'required' , 
            'password' => 'required' , 
        ]); 
       
        
        if (Auth::guard('web')->attempt(['username' => $req->username , 'password' => $req->password])) {
            request()->session()->regenerate();
 
            return redirect()->intended('/');
        }

        dd('gagal');
    }
}
