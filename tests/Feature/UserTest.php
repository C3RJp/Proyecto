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
            'cedula'=>"126",
            'nombres'=>"emp2",
            'apellidos'=>"emp2",
            'direccion'=>"Cra126",
            'celular'=>"312203",
            'correo'=>"emp2@mail.com",
            'clave'=>"126"
        ];

        $response = $this->post('registroe',$datos);
        $response = $this->withHeaders(['X-CSRF-TOKEN' => csrf_token(),])->post('registroe', $datos);
        $response->assertFound();
        
    }
}
