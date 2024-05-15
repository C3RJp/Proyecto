<?php

namespace App\Http\Controllers;

use App\Models\servicio;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function registrar(request $request){
        $servicio = new servicio();

        $servicio->numeroContrato=$request->numContrato;
        $servicio->cedulaEmpleado=$request->cedulaAbogado;
        $servicio->cedulaCliente=$request->CedulaCliente;
        $servicio->numeroCuotas=$request->numCuotas;
        $servicio->adicionales=$request->adicionales;
        $servicio->valorAdicional=$request->valorAdicional;
        $servicio->valorContrato=$request->valorContrato;
        $servicio->valorCuotaInicial=$request->valorCuotaI;
        $servicio->save();
        return back();
    }

    public function consultars(){
        $numContraro=request('numeroContrato');
        $servicios = servicio::paginate('10');
        $servicio = servicio::where('numeroContrato','=',$numContraro)->get();
        return view('consultas', compact('servicios','servicio'));
    }

    public function actualizar(request $request){        
        $numContrato =request('nContrato');
        $servicio= servicio::where('numeroContrato','=',$numContrato)->first();

        $servicio->activo=$request->activo;
        $servicio->mora=$request->mora;
        $servicio->diasMora=$request->diasMora;
        $servicio->numeroCuotas=$request->numeroCuotas;
        $servicio->adicionales=$request->adicionales;
        $servicio->valorAdicional=$request->valorAdicional;
        $servicio->valorContrato=$request->valorContrato;
        $servicio->valorCuotaInicial=$request->valorCuotaInicial; 

        $servicio->update();
        return back();
    }

    public function borrar(){
        $numeroServicio=request('numeroContrato');
        $servicio= servicio::where('numeroContrato','=',$numeroServicio)->first();
        if($servicio)
        {
            $servicio->delete();            
            return back();
        }
        else
        {
            return back();
        }
    }
}
