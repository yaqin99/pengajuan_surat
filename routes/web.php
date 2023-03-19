<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::get('/loginAdmin',[AuthController::class , 'loginView']);
Route::get('/register',[AuthController::class , 'register']);
Route::post('/loginAdmin',[AuthController::class , 'loginMethod']);
Route::get('/login',[AuthController::class , 'userView'])->name('login')->middleware('guest');
Route::get('/registerUser',[AuthController::class , 'registerUser'])->middleware('guest');
Route::post('/registerUser',[AuthController::class , 'registerUserMethod']);
Route::post('/loginUser',[AuthController::class , 'userLogin']);
Route::post('/logout',[AuthController::class , 'logout']);
