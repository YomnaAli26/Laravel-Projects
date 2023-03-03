<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;


class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(5),
            'description'=>$this->faker->sentence(15),
            'user_id'=>User::all()->random()->id,
            'img'=>$this->faker->image(public_path('Images/Posts'),100,100,null,false),
            'created_at'=>'3-3-2021',
        ];
    }

}
