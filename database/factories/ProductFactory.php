<?php

namespace Database\Factories;

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
protected $model = \App\Models\Product::class;
    public function definition(): array
    {
        return [
          'name' => fake()->name(),
          'image' => fake()->imageUrl(),
          'price' => fake()->numberBetween(100, 1000),
          'description' => fake()->text(),
          

        ];
    }

    
}
