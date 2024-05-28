<?php
namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\empleado;
use Illuminate\Http\Request;

class validar extends Controller
{    
    public function validar()
    {
        $cedula=request('cedula');        
        $clave=request('clave');
        $empleado=empleado::where('cedula','=',$cedula)->get();
        $cliente =cliente::where('cedula','=',$cedula)->get();        

        if($empleado->isEmpty() and $cliente->isEmpty())
        {
            return back();
        }
        else
        {
            foreach($empleado as $emp)
            {
                if($emp->cargo=='administrador' and $emp->clave==$clave)
                {
                    return redirect('administrador');
                } 
                else 
                {
                    if($emp->cargo=='empleado' and $emp->clave==$clave)
                    {
                        return redirect('empleado');
                    }
                    else
                    {
                        return back();
                    }                 
                }
            }
        }
        foreach($cliente as $cli)
        {
            if($cli->cedula==$cedula and $cli->clave==$clave)
            {
                return redirect('cliente');
            } 
            else 
            {
                return back();
            }  
        }
    }
}