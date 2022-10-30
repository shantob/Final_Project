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
    public function definition()
    {
        return [
            'name'=>fake()->sentence(5),
            'category_id'=>fake()->numberBetween(15),
            'description'=>fake()->text(30),
            'price'=>fake()->numberBetween(200, 100000),
            'tags'=>fake()->sentence(5),
            'img_alt'=>fake()->sentence(5),
            'image' => fake()->imageUrl($width=400, $height=400),
        ];
    }
}
