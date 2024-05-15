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

        $cedula=request('cedulaEA');
        $empe= empleado::where('cedula','=',$cedula)->first();
        echo $empe->nombres;
    }
    public function desactivar(){
        $cedula=request('cedula');
        $empe= empleado::where('cedula','=',$cedula)->first();
        $empe->delete();            
        return back();
    }
}