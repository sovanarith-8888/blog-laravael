<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class NewPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'newpost' => $this->faker->name(),
        ];
    }
}
