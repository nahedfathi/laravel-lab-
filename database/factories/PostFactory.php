<?php

namespace Database\Factories;
use App\Models\creator;
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
            'title' => fake()->title(),
            'creator_id' => Creator::inRandomOrder()->first()->id,
            'description' => fake()->slug(),
        ];
    }
}
