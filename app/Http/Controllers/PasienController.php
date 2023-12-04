<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(){
        $data = Pasien::all();
        return view('patient.add', compact('data'),[
            'title' => 'Data Pasien'
        ]);
    }

    public function create(){
        return view('patient.create',[
            'title' => 'Tambah Data Pasien'
        ]);
        
    }

    public function store_data(Request $req){
         $validatedData = $req->validate([
            'fullname' => 'required|string|max:255',
            'gender' => 'required|string',
            'age' => 'required|integer',
            'order_type' => 'required|string',
        ]);

        Pasien::create($validatedData);
        return redirect()->route('index-pasien');

    }
}
