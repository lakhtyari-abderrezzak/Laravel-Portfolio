<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence, // Generates a random sentence as the title
            'description' => $this->faker->paragraph, // Generates a random paragraph as the description
            'slug' => $this->faker->slug, // Generates a random slug
            'image_url' => $this->faker->imageUrl(640, 480, 'articles', true),
        ];
    }
}
