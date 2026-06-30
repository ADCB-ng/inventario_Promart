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
        Schema::create('pedido_proveedores', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_pedido');
            $table->date('fecha_entrega');
            $table->integer('cantidad');
            $table->foreignId('estado_id')->constrained('estados');
            $table->foreignId('proveedor_id')->constrained('proveedores');
            $table->foreignId('producto_id')->constrained('productos');
            $table->foreignId('empleado_id')->constrained('empleados');
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_proveedores');
    }
};
