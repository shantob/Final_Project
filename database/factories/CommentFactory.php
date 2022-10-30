<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'blog_id' => fake()->numberBetween(0, 5000),
            'blog_title' => fake()->sentence(9),
            'email' => fake()->email(),
            'name' => fake()->userName(),
            'comment' => fake()->text(30),
            'is_read' => fake()->boolean(),

        ];
    }
}
