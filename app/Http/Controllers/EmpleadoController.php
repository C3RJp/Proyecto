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
        $cedula=request('cedula');
        $empleado= empleado::where('cedula','=',$cedula)->exists();        

        if($empleado)
        {
            $empleado= empleado::where('cedula','=',$cedula)->first();
            $empleado->nombres = $request->nombreEA;
            $empleado->apellidos = $request->apellidoEA;
            $empleado->celular = $request->celularEA; 
            $empleado->direccion = $request->direccionEA;            
            $empleado->correo = $request->correoEA;
            $empleado->clave = $request->claveEA;
            return back();
        }
        else
        {
            $empleado=empleado::where('cedula','=',0)->get();
            return view('actualizacione', compact('empleado'));    
        }
    }

    public function cact(request $request)
    {
        $cedula=request('cedula');
        
        if($cedula)
        {
            $validar=empleado::where('cedula','=',$cedula)->exists();
            if($validar)
            {
                $empleado=empleado::where('cedula','=',$cedula)->get();
                return view('actualizacione', compact('empleado'));
            }
            else
            {
                $empleado=empleado::where('cedula','=',0)->get();
                return view('actualizacione', compact('empleado'));    
            }         
        }
        else
        {
            $empleado=empleado::where('cedula','=',0)->get();
            return view('actualizacione', compact('empleado'));
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