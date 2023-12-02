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

Route::get('/', [AuthController::class,'login'])->name('login');
Route::post('/login-load', [AuthController::class,'login_load'])->name('login-load');
Route::middleware(['auth','level:admin,user '])->group(function () {
    Route::get('/index', [HomeController::class,'index'])->name('index');
});
