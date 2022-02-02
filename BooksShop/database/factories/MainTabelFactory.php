<?php

namespace Database\Factories;

use App\Models\Books;
use App\Models\Gener;
use Illuminate\Database\Eloquent\Factories\Factory;

class MainTabelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'book_id'=> Books::all()->random()->id,
            'gener_id'=> Gener::all()->random()->id,
            'created_at' =>  $this->faker->dateTimeBetween('-30 days', '-1 days'),
            'updated_at' => $this->faker->dateTimeBetween('-30 days', '-1 days'),
        ];
    }
}
