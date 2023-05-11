<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Artist;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Band>
 */
class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $location = [ 'Bohol', 'Dumaguete', 'Palawan', 'Cebu', 'Manila', 'Iloilo', 'Pampanga'];
        $genre = [ 'Rock', 'Pop', 'Rap', 'R&B', 'Jazz', 'Latin', 'Soul'];
        $selected = fake()->randomElements($genre, 2);
        $genreString = implode(', ', $selected);

        return [
            'name' => fake()->word,
            'genre' => $genreString,
            'location' => fake()->randomElement($location),
            'rate' => fake()->randomFloat(2, 999, 9999),
            'total_transactions' => fake()->numberBetween(0, 1999),
            'description' => fake()->text(),
            'image' => fake()->imageUrl($width = 640, $height = 640)
        ];
    }
}
