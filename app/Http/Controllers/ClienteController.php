<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function registroc(request $request){
        
        $cliente = new cliente();        
        $cliente->cedula = $request->cedulaC;
        $cliente->nombres = $request->nombreC;
        $cliente->apellidos = $request->apellidoC;        
        $cliente->direccion = $request->direccionC;
        $cliente->celular = $request->celularC;
        $cliente->correo = $request->correoC;
        $cliente->nacionalidad = $request->nacionalidad;
        $cliente->clave = $request->claveC;
        $cliente->save();
        return back(); 
    }

    public function consultarc(){
        $cedulaC=request('cedulaCliente');
        $clientes=cliente::paginate('10');
        $cliente=cliente::where('cedula','=',$cedulaC)->get();
        return view('consultac', compact('clientes','cliente'));
    }

    public function actualizarc(request $request){

        $cedula=request('cedula');
        $cliente= cliente::where('cedula','=',$cedula)->exists();

        if($cliente)
        {
            $cliente= cliente::where('cedula','=',$cedula)->first();
            $cliente->nombres = $request->nombreCA;
            $cliente->apellidos = $request->apellidoCA;
            $cliente->celular = $request->celularCA;
            $cliente->direccion = $request->direccionCA;
            $cliente->correo = $request->correoCA;
            $cliente->nacionalidad = $request->nacionalidadCA;
            $cliente->clave = $request->claveCA;
            $cliente->update();
            return back();
        }
        else
        {
            $cliente=cliente::where('cedula','=',0)->get();
            return view('actualizacionc', compact('cliente'));
        }
    }

    public function ccli(Request $request)
    {
        $cedula=request('cedula');
        
        if($cedula)
        {
            $validar=cliente::where('cedula','=',$cedula)->exists();
            if($validar)
            {
                $cliente=cliente::where('cedula','=',$cedula)->get();
                return view('actualizacionc', compact('cliente'));
            }
            else
            {
                $cliente=cliente::where('cedula','=',0)->get();
                return view('actualizacionc', compact('cliente'));    
            }         
        }
        else
        {
            $cliente=cliente::where('cedula','=',0)->get();
            return view('actualizacionc', compact('cliente'));
        }       
    }

    public function borrarc(){
        $cedula=request('cedula');
        $empe= cliente::where('cedula','=',$cedula)->first();
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
