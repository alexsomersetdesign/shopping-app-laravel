<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class UserRegistrationTest extends TestCase {

    /** @test */
    public function a_user_can_register_with_valid_data()
    {
        $data = [
            'name' => 'Alex',
            'email' => 'alex@gmail.com',
            'password' => 'password',
        ];

        // Attempt to register the user, if successful then add to db
        $response = $this->post('/register', $data);

        $this->assertDatabaseHas('users', [
            'email' => 'alex@gmail.com',
        ]);

        $response->assertRedirect('/login'); 
    }

    public function a_user_cannot_register_with_invalid_data()
    {
        // Invalid data for registration
        $data = [
            'name' => '',
            'email' => 'invalid-email',
            'password' => '1',
        ];

        //Attempt to register user, if not then ensure not added to db
        $response = $this->post('/register', $data);

        $response->assertSessionHasErrors(['name', 'email', 'password']);

        $this->assertDatabaseMissing('users', [
            'email' => 'not-a-valid-email',
        ]);
    }
}
