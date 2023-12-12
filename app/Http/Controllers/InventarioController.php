<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\inventario;
use App\Models\movimiento;
use App\Models\producto;

class InventarioController extends Controller
{
    //
    public function index(){
        $inventarios=inventario::join('movimientos','movimientos.id_inventario','=','inventarios.id')
        ->join('productos','productos.id','=','movimientos.id_producto')
        ->select('inventarios.*','productos.*','movimientos.*')->get();
        return view('inventarioa',compact('inventarios'));
    }

    public function show(request $request){

    }

    public function create(){

    }

    public function store(Request $request){

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
