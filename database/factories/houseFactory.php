<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\house>
 */
class houseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'location' => fake()->city(),
            'type' => fake()->randomElement(['Apartment', 'House', 'Condo']),
            'bedrooms' => fake()->numberBetween(1, 5),
            'bathrooms' => fake()->numberBetween(1, 3),
            'price' => fake()->numberBetween(100000, 1000000),
            'description' => fake()->paragraph(),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
