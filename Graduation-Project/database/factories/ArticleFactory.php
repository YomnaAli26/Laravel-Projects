<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'content'=>$this->faker->text,'desc'=>$this->faker->sentence,
            'img'=>$this->faker->image('public\storage',640,480,null,false),
            'cate_id'=>Category::all()->random()->id
        ];
    }
}
