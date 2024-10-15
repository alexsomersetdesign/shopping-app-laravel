<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;

class UserLoginTest extends TestCase {

    /** @test */
    public function a_user_can_login_with_valid_credentials()
    {
        // Create a user
        $user = User::factory()->create([
            'password' => bcrypt($password = 'password123'),
        ]);

        // Attempt to log in
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $password,
        ]);

        // Check for successful login
        $response->assertRedirect('/shopping-list'); 
        $this->assertAuthenticatedAs($user);
    }


    public function a_user_cannot_login_with_invalid_credentials()
    {
        // Attempt to log in with invalid credentials
        $response = $this->post('/login', [
            'email' => 'nonexistent@example.com',
            'password' => 'wrongpassword',
        ]);

        // Check for failure response
        $response->assertSessionHasErrors(); 
        $this->assertGuest();
    }
}
