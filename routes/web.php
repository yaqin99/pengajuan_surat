<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\KritikController;
use App\Models\Pengajuan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $data = Pengajuan::with(['user' , 'jenis'])->where('user_id',Auth::user()->id)->paginate(10);
    $self = User::find(Auth::user()->id)->first();
    // dd($data);
    return view('pages.dashboard' , [
        'data' => $data , 
        'datas' => $self
    ]);
})->middleware('auth');


Route::get('/profil',[UserController::class , 'profil'])->middleware('auth');
Route::post('/pengajuan/review/',[PengajuanController::class , 'cetak']);

//   AUTHENTICATION 
Route::get('/loginAdmin',[AuthController::class , 'loginView'])->middleware('adminDoneLogin');
Route::get('/register',[AuthController::class , 'register'])->middleware('adminDoneLogin');
Route::post('/loginAdmin',[AuthController::class , 'loginMethod']);
Route::get('/login',[AuthController::class , 'userView'])->name('login')->middleware('guest');
Route::get('/registerUser',[AuthController::class , 'registerUser'])->middleware('guest');
Route::post('/registerUser',[AuthController::class , 'registerUserMethod']);
Route::post('/loginUser',[AuthController::class , 'userLogin']);
Route::post('/logout',[AuthController::class , 'logout']);
Route::post('/logoutAdmin',[AuthController::class , 'logoutAdmin']);


//  PENGAJUAN

Route::post('/suratTidakMampu/{judul}',[PengajuanController::class , 'sktm']);
Route::post('/suratUmum/{judul}',[PengajuanController::class , 'sktm']);
Route::post('/suratBelumNikah/{judul}',[PengajuanController::class , 'sktm']);
Route::post('/suratUsaha/{judul}',[PengajuanController::class , 'sktm']);
Route::post('/skck/{judul}',[PengajuanController::class , 'sktm']);
Route::post('/domisiliPenduduk/{judul}',[PengajuanController::class , 'sktm']);
Route::post('/domisiliUsaha/{judul}',[PengajuanController::class , 'sktm']);
Route::post('/suratKelahiran/{judul}',[PengajuanController::class , 'sktm']);
Route::post('/suratKematian/{judul}',[PengajuanController::class , 'sktm']);
Route::post('/suratKehilangan/{judul}',[PengajuanController::class , 'sktm']);
Route::post('/suratPindah/{judul}',[PengajuanController::class , 'sktm']);
Route::post('/suratKeluar/{judul}',[PengajuanController::class , 'sktm']);
Route::post('/suratPecah/{judul}',[PengajuanController::class , 'sktm']);


//   DELETE PENGAJUAN
Route::post('/deletePengajuan',[PengajuanController::class , 'deletePengajuan']);
Route::post('/updatePengajuan',[PengajuanController::class , 'updatePengajuan']);
Route::post('/deleteUser/{id}',[UserController::class , 'destroy']);
Route::post('/deleteAdmin/{id}',[AdminController::class , 'destroy']);
Route::post('/deleteKritik/{id}',[KritikController::class , 'destroy']);



//   ADMIN

Route::get('/admin',[AdminController::class , 'index'])->middleware('isAdminLogin');
Route::get('/akunAdmin',[AdminController::class , 'adminData']);
Route::get('/user',[AdminController::class , 'userData'])->middleware('isAdminLogin');
Route::get('/saran',[AdminController::class , 'kritikData'])->middleware('isAdminLogin');


//   EDIT 

Route::get('/editUser/{id}',[AdminController::class , 'editUser'])->middleware('isAdminLogin');
Route::get('/editAdmin/{id}',[AdminController::class , 'editAdmin'])->middleware('isAdminLogin');
Route::put('/editDataUser/{id}',[UserController::class , 'edit']);
Route::put('/editDataAdmin/{id}',[AdminController::class , 'edit']);
Route::put('/editUserProfil/{id}',[UserController::class , 'editUserProfil']);
Route::put('/user/editPp/{id}',[UserController::class , 'editPp']);
Route::put('/editBerkas/{id}/{ket}',[UserController::class , 'editBerkas']);


//  USER 
Route::post('/tambahUser',[UserController::class , 'addUser']);
Route::post('/tambahAdmin',[AdminController::class , 'addAdmin']);

// KRITIK DAN SARAN 

Route::post('/addKritik',[KritikController::class , 'addKritik']);
Route::post('/addPengajuan/{id}',[PengajuanController::class , 'addPengajuan']);
