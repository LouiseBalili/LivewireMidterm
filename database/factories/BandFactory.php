<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Band;

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
        $location = [ 'Cebu City', 'Manila', 'Bohol', 'Pampanga', 'Quezon', 'Taguig'];
        $genre = [ 'Rock', 'Pop', 'Reggae', 'Acoustic', 'Classical'];
        $selected = fake()->randomElements($genre, 3);
        $genreString = implode(', ', $selected);
        
        return [
            'bandname' => fake()->word,
            'genre' => $genreString,
            'location' => fake()->randomElement($location),
            'rate' => fake()->randomFloat(2, 500, 9999),
            'total_transactions' => fake()->numberBetween(0, 1999),
            'description' => fake()->text(),
            'image' => fake()->imageUrl($width = 640, $height = 640)
        ];
    }
}
