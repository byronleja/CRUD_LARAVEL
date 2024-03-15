<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(20, true),
            'body' => $this->faker->sentence(45),
            'author_id' => $this->faker->numberBetween(1, 200),
            'category_id' => $this->faker->numberBetween(1, 200),
        ];
    }
}
