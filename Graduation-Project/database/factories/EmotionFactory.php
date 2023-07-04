<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmotionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'emotion_img'=>$this->faker->image('public\images',640,480,null,false)
        ];
    }
}
