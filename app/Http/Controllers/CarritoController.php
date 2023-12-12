<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\carrito;
use App\Models\carrito_detalle;
use App\Models\producto;

class CarritoController extends Controller
{
    //
    public function index(){
        // index de carrito y detalle carrito
        $c=carrito::join('carrito_detalles','carritos.id','=','carrito_detalles.carrito_id')->get();
        return $c;
    }

    public function carrito(){
        $productos = Producto::all();
        // Agregar URLs de imágenes de prueba
            foreach ($productos as $producto) {
                $producto->imagen = "https://picsum.photos/200/200?random=" . $producto->id;
            }

            return view('carritoa', compact('productos'));
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
