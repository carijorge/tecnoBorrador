<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\categoria;
use App\Models\inventario;
use App\Models\movimiento;
use App\Models\producto;
use Carbon\Carbon;

class ProductoController extends Controller
{
    //
    public function index(){
        $productos = Producto::all();
    // Agregar URLs de imágenes de prueba
        foreach ($productos as $producto) {
            $producto->imagen = "https://picsum.photos/200/200?random=" . $producto->id;
        }

        return view('productoa', compact('productos'));
    }

    public function show(request $request){

    }

    public function create(){
        $categorias=categoria::all();
        return view('productoagg',compact('categorias'));
    }

    public function store(Request $request){
        $p=new producto();
        $i=new inventario();

        $p->nombre = $request->input('nombre');
        $p->descripcion = $request->input('descripcion');
        $p->precio = $request->input('precio');
        $p->stock = $request->input('stock');
        $p->codigo = $request->input('codigo');
        $p->imagen = $request->input('imagen');
        $p->id_categoria = $request->input('id_categoria');
        $p->save();

        $i=inventario::create([
           'descripcion' => 'inventario Inicial de '.$p->nombre,
           'ubicacion' => $request->ubicacion,
           'stock' => $p->stock
        ]);


        $m = movimiento::create([
            'cantidad' => $p->stock,
            'fecha_movimiento' => carbon::now(),
            'motivo_movimiento' => 'Ingreso de producto nuevo '.$p->nombre,
            'id_producto' => $p->id,
            'id_inventario' => $i->id,
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
