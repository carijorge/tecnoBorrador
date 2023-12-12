<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Schema::table('administradors', function (Blueprint $table) {
           // $table->foreign('codAdministrador')->references('id')->on('users');
        //});
        Schema::table('usuarios', function (Blueprint $table) {
            $table->foreign('id_users')->references('id')->on('users');
        });

        Schema::table('bitacoras', function (Blueprint $table) {
            $table->foreign('id_usuario')->references('id')->on('usuarios');
        });


        Schema::table('usuarios', function (Blueprint $table) {
            $table->foreign('id_rol')->references('id')->on('rols');
        });

        Schema::table('carritos', function (Blueprint $table) {
            $table->foreign('id_usuario')->references('id')->on('usuarios');
        });

        Schema::table('carrito_detalles', function (Blueprint $table) {
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('carrito_id')->references('id')->on('carritos');
        });

        Schema::table('ventas', function (Blueprint $table) {
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->foreign('id_carrito')->references('id')->on('carritos');
        });

        Schema::table('productos', function (Blueprint $table) {
            $table->foreign('id_categoria')->references('id')->on('categorias');
        });

        Schema::table('movimientos', function (Blueprint $table) {
            $table->foreign('id_producto')->references('id')->on('productos');
            $table->foreign('id_inventario')->references('id')->on('inventarios');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
