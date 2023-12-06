<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasienController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// LOGIN REGISTER
Route::get('/', [AuthController::class,'login'])->name('login');
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/login-load', [AuthController::class,'login_load'])->name('login-load');
Route::post('/regis-load', [AuthController::class,'store_data_regis'])->name('regis-load');

// MIDDLEWARE
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class,'logout']);
    Route::get('/index', [HomeController::class,'index'])->name('index');
    Route::get('/pasien', [PasienController::class,'index'])->name('index-pasien');
    Route::get('/pasien-add', [PasienController::class,'create'])->name('add-pasien');
    Route::post('/pasien-store', [PasienController::class,'store_data'])->name('store-pasien');
    Route::get('/pasien-delete/{id}', [PasienController::class,'destroy'])->name('delete-pasien');
});
