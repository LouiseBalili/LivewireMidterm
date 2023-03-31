<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Band>
 */
class BandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'bandname' => fake()->company,
            'genre' => fake()->randomElement(['Pop', 'Rock', 'Hip hop', 'Rythm and Blues', 'Jazz', 'Funk', 'Indie', 'Reggae']),
            'location' => fake()->address,
            'rate' => fake()->randomFloat(2, 500, 9999),
            'total_transactions' => fake()->numberBetween(0, 1999),
            'description' => fake()->text(),
            'founder' => fake()->name,
            'image' => fake()->imageUrl($width = 640, $height = 640)
        ];
    }
}
