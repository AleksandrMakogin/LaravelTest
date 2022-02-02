<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'namefilm' => $this->faker->unique()->sentence($nbWords = 4, $variableNbWords = true),
            'image' => $this->faker->imageUrl($width = 640, $height = 480, 'cats', true, 'Faker', true),
            'status'=> rand(0,1),
            'created_at' =>  $this->faker->dateTimeBetween('-30 days', '-1 days'),
            'updated_at' => $this->faker->dateTimeBetween('-30 days', '-1 days'),
        ];
    }
}
