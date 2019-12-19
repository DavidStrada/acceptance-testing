<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserAuthTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function user_sees_name_in_navigation_when_signed_in()
    {

        // Create fake user
        $user = factory(User::class)->create(['first_name' => 'David', 'last_name' => 'Estrada']);

        // sign a user in
        // visit /home
        $response = $this->actingAs($user)
                     ->get('/home');

        // check name.
        $response->assertSeeText('David');
    }
}
