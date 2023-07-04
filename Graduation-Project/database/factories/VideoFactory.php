<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'yoga'=>$this->faker->sentence,
            'sport'=>$this->faker->sentence,
            'quick_and_easy'=>$this->faker->sentence,
            'sleep_better_meditation'=>$this->faker->sentence,
            'stress_management_meditation'=>$this->faker->sentence,
        ];
    }
}
