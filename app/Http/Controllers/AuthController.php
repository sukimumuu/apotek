<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('Auth.login', [
            'title' => 'Masuk | Login'
        ]);
    }

    public function register(){
        return view('Auth.register', [
            'title' => 'Daftar | Register'
        ]);
    }

    public function login_load(Request $req){
        $check = $req->only('email', 'password');
        if(Auth::attempt($check)){
            return redirect()->intended('index');
        }
        return redirect()->route('login');
    }

    public function store_data_regis(Request $req){
         User::create([
           'name' => $req->name,
           'email' => $req->email,
           'password' => Hash::make($req['password']),
        ]);
        return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
