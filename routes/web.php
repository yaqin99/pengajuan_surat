<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengajuanController;
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
    return view('layout');
})->middleware('auth');


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
Route::post('/suratPecah/{judul}',[PengajuanController::class , 'sktm']);


//   DELETE PENGAJUAN
Route::post('/deletePengajuan',[PengajuanController::class , 'deletePengajuan']);



//   ADMIN

Route::get('/admin',[AdminController::class , 'index'])->middleware('isAdminLogin');
