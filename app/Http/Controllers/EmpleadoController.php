<?php

namespace App\Http\Controllers;

use App\Models\empleado;
use Illuminate\Http\Request;


class EmpleadoController extends Controller
{
    public function registrar (request $request)
    {        
        $empleado = new empleado();
        
        $empleado->cargo = 'empleado';
        $empleado->cedula = $request->cedula;
        $empleado->nombres = $request->nombres;
        $empleado->apellidos = $request->apellidos;        
        $empleado->direccion = $request->direccion;
        $empleado->celular = $request->celular;
        $empleado->correo = $request->correo;
        $empleado->clave = $request->clave;
        $empleado->save();
        return back();
    }
    
    public function consultar(){ 
        $ced=request('cedulaEmpleado');
        $empleados = empleado::paginate('10');            
        $empleadoEspecifico= empleado::where('cedula','=',$ced)->get();
        return view('consultae', compact('empleadoEspecifico','empleados'));     
    }  
    
    public function actualizar(request $request){             

        $cedula = request('cedulaEA');        
        $emp= empleado::where('cedula','=',$cedula)->exists();
        
        if($emp)
        {
            $emp= empleado::where('cedula','=',$cedula)->first();
            $emp->nombres = $request->nombreEA;
            $emp->apellidos = $request->apellidoEA;
            $emp->direccion = $request->direccionEA;
            $emp->celular = $request->celularEA; 
            $emp->correo = $request->correoEA;
            $emp->clave = $request->claveEA;
            $emp->update();
            return back();
        }
        else
        {
            return back();
        }
    }
    public function desactivar(){
        $cedula=request('cedulaDE');
        $empe= empleado::where('cedula','=',$cedula)->first();
        if ($empe)
        {
            $empe->delete();
            return back();
        }
        else
        {
            return back();
        }        
        
    }
}