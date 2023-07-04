<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'img'=>$this->faker->image('public/images',640,480,null,false)
            ,'name'=>$this->faker->sentence(25),
        ];
    }
}
