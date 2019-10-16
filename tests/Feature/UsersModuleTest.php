<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * se cambio el nombre de la funcion apra que sea más descriptivo y fácil de encontrar
     * Se elimina 'public' de la funcion porque en el test no es necesaria
     * @test
     */
    function it_loads_the_user_profile_page()
    {
        $response = $this->get('/profile');

        $response->assertStatus(200)
                 ->assertSee('user_profile');
    }
}
