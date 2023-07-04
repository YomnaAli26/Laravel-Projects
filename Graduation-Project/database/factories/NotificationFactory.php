<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::all()->random()->id,
            'doctor_id'=>Doctor::all()->random()->id,
            'sendTimestamp'=>$this->faker->time('H:i:s'),
            'receiveTimestamp'=>$this->faker->time('H:i:s'),
            'content'=>$this->faker->text,
        ];
    }
}
