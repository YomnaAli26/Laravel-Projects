<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFavoirateTherapistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_favoirate_therapists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
//            $table->primary(['user_id','doctor_id']);
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id')->on('doctors');
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
        Schema::dropIfExists('user_favoirate_therapists');
    }
}
