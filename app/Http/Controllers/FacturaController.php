<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\factura;

class FacturaController extends Controller
{
    public function registrof(Request $request)
    {
        $factura=new factura();

        $factura->cedula=$request->cedula;
        $factura->numcontrato=$request->numeroContrato;
        $factura->banco=$request->banco;
        $factura->numfactura=$request->numfactura;
        $factura->valor=$request->valor;
        $factura->save();
        return back();
    }

    public function consultaf()
    {
        $cedula=request('cedula');
        $numcontrato=request('numeroContrato');        
        $factura=factura::where([['cedula','=',$cedula],['numcontrato','=',$numcontrato],])->exists();
        if($factura)
        {
            $factura=factura::where([['cedula','=',$cedula],['numcontrato','=',$numcontrato],])->get();
            return view('consultaf',['factura'=>$factura]);
        }
        else
        {
            $factura=factura::where('cedula','=',0)->get();
            return view('consultaf',['factura'=>$factura]); 
        }        
    }
}
