<?php

namespace Database\Factories;

use App\Models\Category;
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
    public function definition(): array
    {
        return [
            'title'=>fake()->sentence(2),
            'description'=>fake()->text(),
            'price'=>fake()->randomFloat(1,2000,200000),
            'path_img'=>fake()->imageUrl(360, 360, 'animals', true, 'cats'),
            'count'=>fake()->randomNumber(4, false),
            'created_at'=> now(),
            'category_id'=>Category::inRandomOrder()->first()->id
        ];
    }
}
