<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Pengajuan;
use App\Models\Jenis;
use App\Models\User;

class AdminController extends Controller
{
   
    public function index(){

        $data = Pengajuan::with(['user' , 'jenis'])->SearchPengajuan()->paginate(10);
        return view('admin.pages.pengajuan' , [
            'data' => $data ,
        ]);

    }

    public function userData (){
        $data = User::SearchUser()->paginate(30);
        return view('admin.pages.user' , [
            'data' => $data ,
        ]);
    }

}
