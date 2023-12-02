<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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
});
