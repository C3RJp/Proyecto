<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PhpParser\Node\Expr\PostDec;
use Tests\TestCase;

class UserTest extends TestCase
{
    // public function test_validar_status_peticion_get_index(): void
    // {
    //     $response = $this->get('/');
    //     $response -> assertOk();
    //     $response->assertViewIs('index');
    // }
    // public function test_validar_status_peticion_get_administrador(): void
    // {
    //     $response = $this->get('administrador');
    //     $response -> assertOk();
    //     $response->assertViewIs('administrador');
    // }
    // public function test_validar_status_peticion_get_empleado(): void
    // {
    //     $response = $this->get('empleado');
    //     $response -> assertOk();
    //     $response->assertViewIs('empleado');
    // }

    // Public function test_validar_status_peticiones_get_gestionEmpleado(): void
    // {
    //     $response = $this->get('registroe');
    //     $response-> assertOk();
    //     $response->assertViewIs('registroe');

    //     $response1 = $this->get('consultae');
    //     $response1-> assertOk();
    //     $response1->assertViewIs('consultae');

    //     $response2 = $this->get('actualizacione');
    //     $response2-> assertOk();
    //     $response2->assertViewIs('actualizacione');

    //     $response3 = $this->get('borrare');
    //     $response3-> assertOk();
    //     $response3->assertViewIs('borrare');
    // }

    // Public function test_post_registro_empleados()
    // {
    //     $datos=
    //     [
    //         'cargo'=>"empleado",
    //         'cedula'=>"128",
    //         'nombres'=>"emp128",
    //         'apellidos'=>"emp128",
    //         'direccion'=>"Cra128",
    //         'celular'=>"320128",
    //         'correo'=>"emp128@mail.com",
    //         'clave'=>"128"
    //     ];

    //     $response = $this->post('registroe',$datos);
    //     $response = $this->withHeaders(['X-CSRF-TOKEN' => csrf_token(),])->post('registroe', $datos);
    //     $response->assertFound();
    // }

    // public function test_post_consulta_empleado():void
    // {    
    //     $datosB=
    //     [            
    //         'cedula'=>"128",
    //         'nombres'=>"emp128",
    //         'apellidos'=>"emp128",
    //         'direccion'=>"Cra128",
    //         'celular'=>"320128",
    //         'correo'=>"emp128@mail.com"               
    //     ];
    //         $response = $this->withHeaders(['X-CSRF-TOKEN' => csrf_token(),])->post('consultae', $datosB);
    //         $this->assertDatabaseHas('empleados', ['cedula' => 128]);        
    //     }

        

        // public function test_post_borrare():void
        // {
        //     $this->withHeaders(['X-CSRF-TOKEN' => csrf_token(),])->post('borrare', ['cedula'=>126]);
        //     $this->assertDatabaseCount('empleados', 5);
        // }
        
    }
