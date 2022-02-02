<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GenerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'namegener'=> $this->faker->unique()->catchPhrase(),
            'created_at' =>  $this->faker->dateTimeBetween('-30 days', '-1 days'),
            'updated_at' => $this->faker->dateTimeBetween('-30 days', '-1 days'),

        ];
    }
}
