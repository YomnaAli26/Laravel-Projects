<?php

namespace Database\Seeders;

use App\Models\Prescription;
use Illuminate\Database\Seeder;

class PrescriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prescription::factory()->count(5)->create();
    }
}
