<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'author_id' => User::Factory(),
            'category_id' => Category::Factory(),
            'slug' => Str::slug(fake()->sentence()),
            'body' => fake()->text()
        ];
    }
}
