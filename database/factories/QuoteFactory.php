<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quote>
 */
class QuoteFactory extends Factory
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
        $quote= implode(' ', array_slice($words, 0, 3));
        $movieIds = Movie::pluck('id')->toArray();
        return [
            'movie_id' => $this->faker->unique()->randomElement($movieIds),
            'quote' => [
                'en' => $this->faker->sentence(),
                'ka' => $quote,
            ],
            'thumbnail' => $this->faker->imageUrl(),
        ];
    }
}
