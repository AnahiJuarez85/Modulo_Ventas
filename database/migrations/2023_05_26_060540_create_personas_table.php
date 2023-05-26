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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->String('nombre');
            $table->String('paterno');
            $table->String('materno');
            $table->String('fecha_nacimiento');
            $table->String('direccion');
            $table->String('telefono');
            $table->String('profesion');
            $table->String('asociado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
