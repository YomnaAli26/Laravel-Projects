<?php

namespace Database\Factories;

use App\Models\Doctor;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class Post_likesFactory extends Factory
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
            'post_id'=>Post::all()->random()->id,
            'like'=>'like',

        ];
    }
}
