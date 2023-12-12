<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bitacora;
use App\Models\User;

class BitacoraController extends Controller
{
    //
    public function index(){
        $bitacoras=bitacora::All();
        return view('bitacoraa',compact('bitacoras'));
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
