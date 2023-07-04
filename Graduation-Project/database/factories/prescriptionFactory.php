<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Support\Collection;

class prescriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'content'=>$this->faker->text(200),
            'user_id'=>User::all()->random()->id,
            'doctor_id'=>Doctor::all()->random()->id,
        ];
    }
}
