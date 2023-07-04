<?php

namespace Database\Seeders;

use App\Models\Safespace;
use Illuminate\Database\Seeder;

class SafespacesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Safespace::factory()->count(5)->create();
    }
}
