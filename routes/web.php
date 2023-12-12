<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\CarritoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome2');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/loginS',function(){
    return view('auth.loginS');
})->name('loginS');

//Route::post('/loginSS',[UsuarioController::class,'login'])->name('loginSS');

Route::get('/admin/welcomea',function(){ return view('welcomea');})->name('wa');

Route::get('/empleado/welcomee',function(){ return view('welcomee');})->name('we');

Route::get('/cliente/welcomea',function(){ return view('welcomec');})->name('wc');

Route::get('/admin/productoa',[ProductoController::class,'index'])->name('pa');
Route::get('/admin/productoagg',[ProductoController::class,'create'])->name('pcreate');
Route::post('/admin/productoag',[ProductoController::class,'store'])->name('pstore');

Route::get('/admin/categoriaa',[CategoriaController::class,'index'])->name('ca');
Route::post('/admin/categoriaagg',[CategoriaController::class,'store'])->name('cstore');

Route::get('/admin/inventarioa',[InventarioController::class,'index'])->name('ia');

Route::get('/admin/bitacora',[BitacoraController::class,'index'])->name('ba');

Route::get('/admin/carrito',[CarritoController::class,'carrito'])->name('carr');
