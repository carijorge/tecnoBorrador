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
        Schema::create('carrito_detalles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cantidad');
            $table->decimal('precio_u');
            $table->decimal('subtotal');
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('carrito_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrito_detalles');
    }
};
