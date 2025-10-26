<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    protected $model = \App\Models\Book::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),          
            'author' => $this->faker->name(),             
            'price' => $this->faker->randomFloat(2, 5, 100), 
            'stock' => $this->faker->numberBetween(0, 50),   
            'description' => $this->faker->paragraph(),      
            'image' => $this->faker->imageUrl(200, 300),     
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
