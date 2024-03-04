<?php

use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\validar;

Route::get('/', function () {
    return view('index');
});

Route::post('/', validar::class);

Route::get('administrador', function (){
    return view('administrador');
} );

route::get('registroe',function(){
    return view('registroe');
});

route::get('consultae', function (){
    return view('consultae');
});
route::get('actualizacione', function (){
    return view('actualizacione');
});
route::get('borrare', function (){
    return view('borrare');
});

route::Post('registroe',[EmpleadoController::class,'registrar'])->name('regE');
route::post('consultae',[EmpleadoController::class,'consultar'])->name('consultaE');
route::post('actualizacione',[EmpleadoController::class,'actualizar'])->name('actE');
route::post('borrare',[EmpleadoController::class,'desactivar'])->name('desE');