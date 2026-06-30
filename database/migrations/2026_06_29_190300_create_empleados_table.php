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
        Schema::create('empleados', function (Blueprint $table) {
          $table->id();
          $table->string('nombre');
          $table->string('apellido_paterno');
          $table->string('apellido_materno');
          $table->date('fecha_nacimiento');
          $table->date('fecha_ingreso');
          $table->string('dni', 8);
          $table->string('cargo');
          $table->foreignId('area_id')->constrained('areas');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};