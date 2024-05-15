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
        Schema::create('servicios', function(Blueprint $table){
            $table->id();
            $table->integer('numeroContrato');
            $table->boolean('activo')->default(1);
            $table->boolean('mora')->default(0);
            $table->integer('cedulaEmpleado');
            $table->integer('cedulaCliente');            
            $table->integer('diasMora')->default(0);
            $table->integer('numeroCuotas');
            $table->string('adicionales');
            $table->integer('valorAdicional');
            $table->integer('valorContrato');            
            $table->integer('valorCuotaInicial');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
