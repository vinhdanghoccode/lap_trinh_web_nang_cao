<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
        'name'=>$this->faker->name,
        'price'=>$this->faker->numberBetween(1000,100000),
        'quantity'=>$this->faker->numberBetween(1,50),
        'content'=>$this->faker->paragraph,
        'category_id'=>$this->faker->numberBetween(1,5),
        'views'=>0,
        'is_active'=>true
    ];
}
}
