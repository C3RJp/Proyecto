<?php
namespace App\Http\Controllers;

use App\Models\empleado;
use Illuminate\Http\Request;

class validar extends Controller
{    
    public function validar(){
        $cedula=request('cedula');        
        $clave=request('clave');
        $empleado=empleado::where('cedula','=',$cedula)->get();
        foreach($empleado as $emp)
        {            
         if($emp->cargo=='administrador')
            {
                if($emp->clave==$clave)
                {
                    return redirect('administrador');
                }
                else
                {
                    return back();
                }
            }
         else
         {
            if ($emp->cargo=='empleado')
            {
                if($emp->clave==$clave)
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
    }
}