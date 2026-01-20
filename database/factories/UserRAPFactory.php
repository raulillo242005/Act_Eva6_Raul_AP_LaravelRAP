<?php

namespace Database\Factories;

use App\Models\UserRAP;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserRAPFactory extends Factory
{
    protected $model = UserRAP::class;

    public function definition()
    {
        // Forzar Faker a usar español
        $this->faker = \Faker\Factory::create('es_ES');

        return [
            'name' => $this->faker->name(),
            'username' => $this->faker->unique()->userName(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'role' => $this->faker->randomElement(['admin', 'user']),
            'active' => $this->faker->boolean(90),
            'remember_token' => Str::random(10),
        ];
    }
}
