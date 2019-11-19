<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

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
        $this->withoutExceptionHandling();

        //$user = User::findOrFail($request->id);
        $user = factory(User::class)->create();

        $response = $this->get("user_profile/{$user->id}");

        $response->assertStatus(200)
                 ->assertSee('user_profile');
    }

//  function it_updates_a_user(){

//      $this->withoutExceptionHandling();

//      $user = factory(User::class)->create();
//
//      $this->put("user_profile/{$user->id}" ,[

//          'firstName' => 'Horacio',
//          'lastName ' => 'Rozanski',
//           ])->assertRedirect("user_profile/{$user->id}");
//  }
}
