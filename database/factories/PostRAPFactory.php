<?php

namespace Database\Factories;

use App\Models\PostRAP;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostRAPFactory extends Factory
{
    protected $model = PostRAP::class;

    public function definition()
    {
        // Faker en español
        $this->faker = \Faker\Factory::create('es_ES');

        return [
            'title' => $this->faker->sentence(6),
            'content' => $this->faker->paragraphs(3, true),
            'excerpt' => $this->faker->sentence(10),
            'views' => $this->faker->numberBetween(0, 1000),
            'category' => $this->faker->randomElement(['Tecnología', 'Vida', 'Noticias', 'Deportes', 'Cultura']),
            'published_at' => $this->faker->dateTimeThisYear(),
            'is_published' => $this->faker->boolean(70),
        ];
    }
}
