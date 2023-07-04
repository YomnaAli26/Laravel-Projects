<?php

namespace Database\Factories;

use App\Models\Emotion;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'img'=>$this->faker->image('public/images',640,480,null,false),
            'emotion_id'=>Emotion::all()->random()->id,

        ];
    }
}
