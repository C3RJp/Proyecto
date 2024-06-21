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
        $numContraro=request('cedulaCliente');
        $servicios = servicio::paginate('10');
        $servicio = servicio::where('cedulaCliente','=',$numContraro)->get();
        return view('consultas', compact('servicios','servicio'));
    }

    public function consultasc()
    {    
        $cedulac=request('cedula');
        $numContraro=request('cedulacliente');        
        $scliente=servicio::where([['cedulaCliente','=',$numContraro],['cedulaCliente','=',$cedulac],])->exists();
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

    public function cser(Request $request)
    {
        $numero=request('numero');
        $validar=servicio::where('id','=',$numero)->exists();
        if($validar)
        {
            $servicios=servicio::where('id','=',$numero)->get();
            return view('actualizacions',compact('servicios'));
        }
        else
        {
            $servicios=servicio::where('id','=',1)->get();
            return view('actualizacions',compact('servicios'));
        }        
    }

    public function actualizar(request $request)
    {
        $numContrato =request('numero');
        $validar= servicio::where('id','=',$numContrato)->exists();
        if($validar)
        {
            $servicios= servicio::where('id','=',$numContrato)->first();
            $servicios->activo=$request->activo;
            $servicios->mora=$request->mora;
            $servicios->diasMora=$request->diasm;
            $servicios->numeroCuotas=$request->numeroCuotas;
            $servicios->adicionales=$request->adicionales;
            $servicios->valorAdicional=$request->valorAdicional;
            $servicios->valorContrato=$request->valorContrato;
            $servicios->valorCuotaInicial=$request->valorCuotaInicial;
            $servicios->update();
            return back();            
        }
        else
        {
            $servicios= servicio::where('id','=',1)->get();
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
