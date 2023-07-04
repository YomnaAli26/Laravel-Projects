<?php

namespace Database\Seeders;

use App\Models\Notification;
use App\Models\UserFavoratePodcast;
use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            DoctorsSeeder::class,
            ReviewsSeeder::class,
            PostsSeeder::class,
            CategoriesSeeder::class,
            MessagesSeeder::class,
            PrescriptionsSeeder::class,
            ArticlesSeeder::class,
            NotificationsSeeder::class
            ,AppointmentsSeeder::class,
            EmotionsSeeder::class,
           VideosSeeder::class,
            PodcastsSeeder::class,
            UserFavoratetherapistsSeeder::class,
            UserFavoiratePodcastsSeeder::class,
            SafespacesSeeder::class,
            QuotesSeeder::class,
             Post_likesSeeder::class,
            RatesSeeder::class,

        ]);
    }
}
