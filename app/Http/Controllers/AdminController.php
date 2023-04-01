<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Pengajuan;
use App\Models\Jenis;

class AdminController extends Controller
{
   
    public function index(){

        $data = Pengajuan::with(['user' , 'jenis'])->SearchPengajuan()->paginate(10);
        return view('admin.home' , [
            'data' => $data ,
        ]);

    }

}
