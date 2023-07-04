<?php

namespace Database\Seeders;

use App\Models\UserFavoiratePodcast;
use App\Models\UserFavoratePodcast;
use Illuminate\Database\Seeder;

class UserFavoiratePodcastsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserFavoiratePodcast::factory()->count(5)->create();
    }
}
