<?php

namespace Database\Seeders;

use App\Models\Post_likes;
use Illuminate\Database\Seeder;

class Post_likesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        post_likes::factory()->count(5)->create();

    }
}
