<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAchievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_achievements', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->default(2);
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('achievement_id')->default(2);
            $table->foreign('achievement_id')->references('id')->on('achievements');

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
        Schema::dropIfExists('user_achievements');
    }
}
