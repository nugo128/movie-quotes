<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'quotes_id' => $this->faker->unique()->randomNumber(2),
            'movie_id' => $this->faker->unique()->randomNumber(2),
            'quote' => $this->faker->sentence(),
            'thumbnail' => $this->faker->word()


        ];
    }
}
