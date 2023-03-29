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
            'rate' => fake()->randomFloat(2, 1000, 999999),
            'description' => fake()->text(),
            'image' => fake()->imageUrl($width = 640, $height = 640)
        ];
    }
}
