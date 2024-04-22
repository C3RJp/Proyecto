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
            if($emp->cargo =='admin' && $clave == $emp->clave)
            {
                return view('administrador');
            }
            else
            {
                if($emp->cargo =='abogado' && $clave == $emp->clave){
                    return view('empleado'); 
                }
                else { return back();}
            }
        }
    }
}