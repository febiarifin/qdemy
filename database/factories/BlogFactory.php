<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(4);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(640, 480)
        ];
    }
}
