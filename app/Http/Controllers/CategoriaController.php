<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categoria;

class CategoriaController extends Controller
{
    //
    public function index(){
        $categorias=categoria::all();
        //return $c;
        return view('categoriaa',compact('categorias'));
    }

    public function show(request $request){

    }

    public function create(){

    }

    public function store(Request $request){
        $c = categoria::create([
            'descripcion' => $request->descripcion,
            'codigo' => $request->codigo,
        ]);

        return redirect()->back();
    }

    public function edit(){
    }

    public function update(Request $request){

    }

    public function drop(){

    }

    public function delete(Request $request){

    }
}
