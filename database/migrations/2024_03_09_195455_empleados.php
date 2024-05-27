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
        Schema::create('empleados',function(Blueprint $table){
            $table->id();
            $table->string('cargo');
            $table->bigInteger('cedula');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('direccion');
            $table->bigInteger('celular');
            $table->string('correo');
            $table->string('clave');
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
