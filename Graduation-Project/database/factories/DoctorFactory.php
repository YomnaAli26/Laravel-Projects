<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(15),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt(12345), // password
            'img'=>$this->faker->image(public_path('images'),640,480,null,false),

            'degree'=>$this->faker->sentence,
            'experience'=>$this->faker->text,
            'about'=>$this->faker->text,
        ];
    }
}
