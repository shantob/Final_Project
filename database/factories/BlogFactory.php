<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>fake()->sentence(5),
            'category'=>fake()->sentence(5),
            'blog'=>fake()->text(50),
            'image' => fake()->imageUrl($width=400, $height=400),         
            'like'=>fake()->numberBetween(0, 5000),
            'comment'=>fake()->numberBetween(0, 50),
        ];
    }
}
