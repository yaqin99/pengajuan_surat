<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ; 

class AuthController extends Controller
{
    public function loginView(){
        return view('auth.login');
    }
    
    public function loginMethod(Request $req){

        $req->validate([
            'username' => 'required' , 
            'password' => 'required' , 
        ]); 
       
        dd(Auth::guard('admin')->attempt(['username' => $req->username , 'password' => $req->password]));
        
        // if () {
        //     request()->session()->regenerate();
 
        //     return redirect()->intended('/');
        // }

        dd('gagal');
    }
}
