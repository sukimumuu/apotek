<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
   public function index(){
        $data = Dokter::all();
        return view('dokter.add', compact('data'),[
            'title' => 'Data Dokter'
        ]);
    }

    public function create(){
        return view('dokter.create',[
            'title' => 'Tambah Data Dokter'
        ]);
        
    }

    public function store_data(Request $req){
         $validatedData = $req->validate([
            'name' => 'required|string|max:255',
            'poli' => 'required|string',
        ]);

        Dokter::create($validatedData);
        return redirect()->route('index-dokter');

    }

    public function destroy($id){
        $data = Dokter::find($id);
        $data->delete();
        return redirect()->route('index-dokter');
    }
}
