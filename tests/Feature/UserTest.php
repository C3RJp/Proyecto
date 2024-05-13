<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use PhpParser\Node\Expr\PostDec;
use Tests\TestCase;

class UserTest extends TestCase
{
    // public function test_first(): void
    // {
    //     $resp = $this->get('/');
    //     $resp-> assertStatus(200);

    //     $resp1 = $this->get('administrador');
    //     $resp1-> assertStatus(200);

    //     $resp2 = $this->get('empleado');
    //     $resp2-> assertStatus(200);
    // }
    
    // Public function test_client_managment(): void
    // {
    //     $response = $this->get('registroe');
    //     $response-> assertStatus(200);

    //     $response1 = $this->get('consultae');
    //     $response1-> assertStatus(200);

    //     $response2 = $this->get('actualizacione');
    //     $response2-> assertStatus(200);

    //     $response3 = $this->get('borrare');
    //     $response3-> assertStatus(200);
    // }

    Public function test_post_empleados()
    {
        $datos=
        [
            'cargo'=>"empleado",
            'cedula'=>"123",
            'nombres'=>"admin",
            'apellidos'=>"admin",
            'direccion'=>"Cra123",
            'celular'=>"312",
            'correo'=>"admin@mail.com",
            'clave'=>"123"
        ];

        $response=$this->post(route('regE'),$datos);
                
        $this->assertDatabaseHas('regE',$datos);
        
    }
}
