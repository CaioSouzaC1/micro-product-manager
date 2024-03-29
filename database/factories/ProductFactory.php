<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $user_id = User::inRandomOrder()->value('id');

        return [
            'name' => fake()->name(),
            'description' => fake()->text(),
            'price' => rand(1, 200),
            'is_active' => true,
            'user_id' => $user_id
        ];
    }
}
