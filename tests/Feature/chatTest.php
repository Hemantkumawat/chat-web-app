<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Queue;

//uses(RefreshDatabase::class);

beforeEach(function () {
    // Create and authenticate a user before each test
    $this->user = User::factory()->create();
    $this->actingAs($this->user);
});

test('authenticated user can retrieve messages', function () {
    $response = $this->get(route('messages')); // Using named route

    $response->assertOk(); // Asserts status 200
});

test('unauthenticated user cannot retrieve messages', function () {
    auth()->logout(); // Log out the user

    $response = $this->get(route('messages')); // Using named route

    $response->assertRedirect(route('login')); // Unauthenticated users should be redirected to the login page
});



test('unauthenticated user cannot send a message', function () {
    auth()->logout(); // Log out the user

    $response = $this->post(route('message'), [ // Using named route
        'receiver_id' => 1,
        'message' => 'Hello, this is a test message.',
    ]);
    $response->assertStatus(419); // Unauthenticated users should get a 419 status code
});
