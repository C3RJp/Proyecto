<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\ServiciosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\validar;


Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('contactenos',function(){return view('contactenos');});

Route::get('administrador', function (){
    return view('administrador');
} );

Route::get('empleado', function (){
    return view('empleado');
} );

Route::get('cliente', function (){ return view('cliente'); });

// gestionEmpleados
route::get('registroe',function(){
    return view('registroe');
});

route::get('consultae', [EmpleadoController::class,'consultar']);

route::get('actualizacione', [EmpleadoController::class,'cact']);

route::get('borrare', function (){
    return view('borrare');
});


// GestionClientes
route::get('registroc', function (){
    return view('registroc');
});
route::get('consultac', [ClienteController::class,'consultarc']);

route::get('actualizacionc', [ClienteController::class,'ccli']);
route::get('borrarc', function (){
    return view('borrarc');
});


// GestionServicios
route::get('registros', function (){
    return view('registros');
});

route::get('consultas', [ServiciosController::class, 'consultars']);

route::get('actualizacions',[ServiciosController::class,'cser']);
route::get('borrars', function (){
    return view('borrars');
});

// Gestion Pagos
Route::get('registrofacturas', function (){ return view('registrofacturas'); });
Route::get('consultasc', [ServiciosController::class, 'consultasc']);

Route::get('consultaf', [FacturaController::class, 'consultaf']);

//validar
Route::post('/', [validar::class, 'validar'])->name('valid');

// Formularios
route::Post('registroe',[EmpleadoController::class,'registrar'])->name('regE');
route::post('consultae',[EmpleadoController::class,'consultar'])->name('consultaE');
route::post('actualizacione',[EmpleadoController::class,'actualizar'])->name('actE');
route::post('borrare',[EmpleadoController::class,'desactivar'])->name('desE');

route::post('registroc',[ClienteController::class,'registroc'])->name('regC');
route::post('consultac',[ClienteController::class,'consultarc'])->name('conC');
route::post('actualizacionc',[ClienteController::class,'actualizarc'])->name('actC');
route::post('borrarc',[ClienteController::class,'borrarc'])->name('desC');

route::Post('registros',[ServiciosController::class,'registrar'])->name('regS');
route::Post('consultas',[ServiciosController::class,'consultars'])->name('conS');
route::Post('actualizacions',[ServiciosController::class,'actualizar'])->name('actS');
route::Post('borrars',[ServiciosController::class,'borrar'])->name('desS');

route::Post('consultasc',[ServiciosController::class,'consultasc'])->name('conSC');
route::Post('registrofacturas',[FacturaController::class,'registrof'])->name('regF');

route::Post('consultaf',[FacturaController::class,'consultaf'])->name('consF');
