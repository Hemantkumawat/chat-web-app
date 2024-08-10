
<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Faker\Factory as Faker;

//uses(RefreshDatabase::class);

beforeEach(function () {
    $faker = Faker::create();
    $this->email = $faker->email;
    $this->name = $faker->name;
    $this->withoutMiddleware();
});

test('user can register with valid data', function () {
    $response = $this->post('/register', [
        'name' => $this->name,
        'email' => $this->email,
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $response->assertRedirect('/home');
    $this->assertDatabaseHas('users', [
        'email' => $this->email,
    ]);
});

test('user cannot register with missing name', function () {
    $response = $this->post('/register', [
        'email' => $this->email,
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $response->assertSessionHasErrors('name');
});

test('user cannot register with missing email', function () {
    $response = $this->post('/register', [
        'name' => $this->name,
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $response->assertSessionHasErrors('email');
});

test('user cannot register with missing password', function () {
    $response = $this->post('/register', [
        'name' => $this->name,
        'email' => $this->email,
    ]);

    $response->assertSessionHasErrors('password');
});

test('user cannot register with password confirmation mismatch', function () {
    $response = $this->post('/register', [
        'name' => $this->name,
        'email' => $this->email,
        'password' => 'password',
        'password_confirmation' => 'different_password',
    ]);

    $response->assertSessionHasErrors('password');
});

test('user cannot register with an already registered email', function () {
    User::factory()->create([
        'email' => $this->email,
    ]);

    $response = $this->post('/register', [
        'name' => $this->name,
        'email' => $this->email,
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $response->assertSessionHasErrors('email');
});
