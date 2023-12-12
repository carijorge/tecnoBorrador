<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreusuarioRequest;
use App\Http\Requests\UpdateusuarioRequest;
use Hamcrest\Core\AllOf;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $u = new usuario();
        $u = usuario::all();
        return $u;
    }

    public function login(request $request){
        // Validar los datos del formulario de inicio de sesión
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Intentar autenticar al usuario
        if (!auth::attempt($credentials)) {
            // Autenticación exitosa
            $request->session()->regenerate();

            return redirect()->intended('welcome');
        }

        // Autenticación fallida
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no son válidas.',
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreusuarioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateusuarioRequest $request, usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usuario $usuario)
    {
        //
    }
}
