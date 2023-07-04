<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
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
            'password' => bcrypt(123456789), // password
            'remember_token' => Str::random(10),
            'Gender'=>$this->faker->randomElement(['male', 'female']),
            'Address'=>$this->faker->sentence(15),
            'DateOfBirth'=>$this->faker->date('Y-m-d'),
            'img'=>$this->faker->image(null,640,480,null,false),
            'PhoneNumber'=>$this->faker->phoneNumber(),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
