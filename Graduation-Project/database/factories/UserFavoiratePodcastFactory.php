<?php

namespace Database\Factories;

use App\Models\Podcast;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFavoiratePodcastFactory extends Factory
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
            'podcast_id'=>Podcast::all()->random()->id,
            'favourite'=>"1",
        ];
    }
}
