<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stay>
 */
class StayFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'description' => $this->faker->sentence(15),
            'status' => $this->faker->randomElement(['active', 'pending', 'inactive']),
            'type' => $this->faker->randomElement(['hotel', 'apartment', 'resort', 'villa', 'cottage']),
            'location' => $this->faker->word,
            'price' => $this->faker->numberBetween(200, 1000),
        ];
    }
}
