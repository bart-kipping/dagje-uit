<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'model' => $this->faker->name(),
            'img' => $this->faker->image(),
            'occupied' => $this->faker->date($format = 'd-m-Y'),
        ];
    }
}
