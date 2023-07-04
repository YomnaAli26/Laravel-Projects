<?php

namespace Database\Seeders;

use App\Models\Podcast;
use Illuminate\Database\Seeder;

class PodcastsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Podcast::factory()->count(5)->create();
    }
}
