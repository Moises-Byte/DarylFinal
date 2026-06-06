<?php

namespace Database\Factories;

use App\Models\Recipe;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'category' => fake()->word(),
            'preparation_time' => fake()->time(),
            'chef_id' => chefs::factory(),
        ];
    }
}
