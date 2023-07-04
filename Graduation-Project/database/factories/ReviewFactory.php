<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'doctor_id'=>Doctor::all()->random()->id,
            'user_id'=>User::all()->random()->id,
            'content'=>$this->faker->sentence,
        ];
    }
}
