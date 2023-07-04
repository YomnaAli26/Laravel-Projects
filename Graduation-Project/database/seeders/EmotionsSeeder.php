<?php

namespace Database\Seeders;

use App\Models\Emotion;
use Illuminate\Database\Seeder;

class EmotionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Emotion::factory()->count(5)->create();
    }
}
