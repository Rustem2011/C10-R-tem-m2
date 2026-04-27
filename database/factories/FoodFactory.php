<?php

namespace Database\Factories;

use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(2, true),
            'content' => fake()->sentence(10),
            'price' => fake()->numberBetween(20, 500),
            'like_count' => fake()->numberBetween(0, 2000),
            'code' => strtoupper(fake()->bothify('$**$$')),
            'category_id' => null,
            'restaurant_id' => null,
        ];
    }
}
