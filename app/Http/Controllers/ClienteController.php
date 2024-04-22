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
        $cliente->contraseña = $request->claveC;
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
        $cliente= cliente::where('cedula','=',$cedula)->first();            
        $cliente->nombres = $request->nombreEA;
        $cliente->apellidos = $request->apellidoEA;
        $cliente->celular = $request->celularEA;
        $cliente->direccion = $request->direccionEA;
        $cliente->correo = $request->correoEA;
        $cliente->nacionalidad = $request->nacionalidadEA;
        $cliente->contraseña = $request->claveEA;
        $cliente->update();
        return back();
    }

    public function borrarc(){
        $cedula=request('cedula');
        $empe= cliente::where('cedula','=',$cedula)->first();
        $empe->delete();            
        return back();
    }
}
