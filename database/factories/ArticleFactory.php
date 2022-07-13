<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->words(3, true);
        $slug = Str::slug($title, '-');

        return [
            'category_id' => $this->faker->numberBetween(5, 15),
            'title' => $title ,
            'slug' => $slug ,
            'content' => $this->faker->paragraph(3, true)
        ];
    }
}
