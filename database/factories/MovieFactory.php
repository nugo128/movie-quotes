<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker_ka = Faker::create('ka_GE');
        $words = explode(' ', $faker_ka->realText());
        $title = implode(' ', array_slice($words, 0, 3));
        return [
            'title' => [
                'en' => $this->faker->sentence(),
                'ka' => $title,
            ]
        ];
    }
}
