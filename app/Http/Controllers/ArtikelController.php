<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;


class ArtikelController extends Controller
{
    public function create(){
        return view('layouts.form.artikel');
    }     
    
    public function store(Request $request){
        // dd($request->all());
        $new_artikel = ArtikelModel::simpan($request->all());

        return redirect('/items');
    }

    public function index() {
        $artikel = ArtikelModel::get_all();
        // dd($artikel);
        return view('layouts.form.index', compact('artikel'));
    }

}
