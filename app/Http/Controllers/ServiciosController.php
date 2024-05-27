<?php

namespace App\Http\Controllers;

use App\Models\servicio;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function registrar(request $request){
        $servicio = new servicio();
        
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
        $servicio = servicio::where('id','=',$numContraro)->get();
        return view('consultas', compact('servicios','servicio'));
    }
    public function consultasc()
    {    
        $cedulac=request('cedula');
        $numContraro=request('numeroContrato');        
        $scliente=servicio::where([['id','=',$numContraro],['cedulaCliente','=',$cedulac],])->exists();
        if($scliente)
        {
            $scliente=servicio::where([['id','=',$numContraro],['cedulaCliente','=',$cedulac],])->get();
            return view('consultasc',['scliente'=>$scliente]);
        }
        else
        {
            $scliente=servicio::where('id','=',0)->get();
            return view('consultasc',['scliente'=>$scliente]);
        }
        
    }    

    public function actualizar(request $request){        
        $numContrato =request('nContrato');
        $servicio= servicio::where('id','=',$numContrato)->exists();
        if($servicio)
        {
            $servicio= servicio::where('id','=',$numContrato)->first();
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
        else
        {
            return back();
        }    
    }

    public function borrar(){
        $numeroServicio=request('numeroContrato');
        $servicio= servicio::where('id','=',$numeroServicio)->first();
        if($servicio)
        {
            $servicio->activo=0;
            $servicio->update();            
            return back();
        }
        else
        {
            return back();
        }
    }
}
