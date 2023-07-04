<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PodcastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(5),
            'video'=>$this->faker->sentence(15),
            'cate_id'=>Category::all()->random()->id,

        ];
    }
}
