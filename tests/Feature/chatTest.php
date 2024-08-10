<?php

use App\Models\User;

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
