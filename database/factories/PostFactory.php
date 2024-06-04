<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(), //Sirve para hacer una oracion de prueba
            'content' => $this->faker->text(1000), //Hacer un texto de 1000 caracteres
            'category' => $this->faker->word(),
            'published_at' => $this->faker->dateTime(),
        ];
    }
}
