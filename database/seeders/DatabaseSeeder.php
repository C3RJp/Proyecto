<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\cliente;
use App\Models\empleado;
use App\Models\factura;
use App\Models\servicio;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $empleado =new empleado();
        $empleado->cargo='emp';
        $empleado->cedula=0;        
        $empleado->nombres='Nombres';
        $empleado->apellidos='Apellidos';
        $empleado->direccion='Direccion';
        $empleado->celular=0;
        $empleado->correo='Correo';
        $empleado->clave='Contraseña';
        $empleado->save();

        $empleado1=new empleado();
        $empleado1->cargo='administrador';
        $empleado1->cedula=123;        
        $empleado1->nombres='admin';
        $empleado1->apellidos='admin';
        $empleado1->direccion='Cll';
        $empleado1->celular=3205451212;
        $empleado1->correo='admin@mail.com';
        $empleado1->clave='123';
        $empleado1->save();

        $empleado2 =new empleado();
        $empleado2->cargo='empleado';
        $empleado2->cedula=124;        
        $empleado2->nombres='Empleado';
        $empleado2->apellidos='Empleado';
        $empleado2->direccion='Cll';
        $empleado2->celular=312;
        $empleado2->correo='Empleado@mail.com';
        $empleado2->clave='124';
        $empleado2->save();

        $cliente=new cliente();
        $cliente->cedula=0;
        $cliente->nombres='Nombres';
        $cliente->apellidos='Apellidos';
        $cliente->direccion='Direccion';
        $cliente->celular=0;
        $cliente->correo='Correo';
        $cliente->nacionalidad='Nacionalidad';
        $cliente->clave='Contraseña';
        $cliente->save();

        $cliente1=new cliente();
        $cliente1->cedula=321;
        $cliente1->nombres='Cliente';
        $cliente1->apellidos='Cliente';
        $cliente1->direccion='Cra';
        $cliente1->celular=3128579848;
        $cliente1->correo='Cliente@mail.com';
        $cliente1->nacionalidad='colombiano';
        $cliente1->clave='321';
        $cliente1->save();

        $servicio=new servicio();
        $servicio->cedulaEmpleado=0;
        $servicio->cedulaCliente=0;
        $servicio->diasMora=0;
        $servicio->numeroCuotas=0;
        $servicio->adicionales=0;
        $servicio->valorAdicional=0;
        $servicio->valorContrato=0;
        $servicio->valorCuotaInicial=0;
        $servicio->save();

        $servicio1=new servicio();
        $servicio1->cedulaEmpleado=0;
        $servicio1->cedulaCliente=0;
        $servicio1->diasMora=0;
        $servicio1->numeroCuotas=2;
        $servicio1->adicionales=0;
        $servicio1->valorAdicional=0;
        $servicio1->valorContrato=120000;
        $servicio1->valorCuotaInicial=60000;
        $servicio1->save();

        $factura=new factura();
        $factura->cedula=123;
        $factura->numcontrato=1;
        $factura->banco='Bancolombia';
        $factura->numfactura='1';
        $factura->valor=120000;
        $factura->save();
    }
}
