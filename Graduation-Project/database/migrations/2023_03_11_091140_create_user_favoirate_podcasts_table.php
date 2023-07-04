<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFavoiratePodcastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_favoirate_podcasts', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->primary(['user_id','podcast_id']);
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('podcast_id');

            $table->foreign('podcast_id')->references('id')->on('podcasts');
            $table->enum('favourite',[1,0]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_favoirate_podcasts');
    }
}
