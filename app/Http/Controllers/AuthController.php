<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('Auth.login', [
            'title' => 'Masuk | Login'
        ]);
    }

    public function login_load(Request $req){
        $check = $req->only('email', 'password');
        if(Auth::attempt($check)){
            return redirect()->intended('index');
        }
        return redirect()->route('login');
    }
}
