<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Date'=>$this->faker->date('Y-m-d'),
            'Time'=>$this->faker->time('H:i:s'),
            'slot'=>$this->faker->sentence(24),
            'user_id'=>User::all()->random()->id,
            'doctor_id'=>Doctor::all()->random()->id,
        ];
    }
}
