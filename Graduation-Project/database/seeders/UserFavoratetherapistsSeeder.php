<?php

namespace Database\Seeders;

use App\Models\UserFavoirateTherapist;
use Illuminate\Database\Seeder;

class UserFavoratetherapistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserFavoirateTherapist::factory()->count(5)->create();
    }
}
