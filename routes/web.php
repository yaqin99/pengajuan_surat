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
});


//   AUTHENTICATION 
Route::get('/loginAdmin',[AuthController::class , 'loginView']);
Route::post('/loginAdmin',[AuthController::class , 'loginMethod']);
Route::get('/login',[AuthController::class , 'userView']);
Route::post('/loginUser',[AuthController::class , 'userLogin']);
