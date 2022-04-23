<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('nickname', 40)->unique();
            $table->integer('exp')->default(0);
            $table->string('email')->unique();
            $table->string('role')->default('USER');

            $table->integer('country_id')->nullable();
            $table->integer('political_view_id')->nullable();
            $table->integer('current_region_id')->nullable();
            $table->integer('registration_region_id')->nullable();
            $table->integer('nation_id')->nullable();

            $table->string('description', 1000)->nullable();
            $table->string('avatar')->nullable();

            $table->boolean('banned')->default(FALSE);
            $table->boolean('inactive')->default(FALSE);
            $table->boolean('premium')->default(FALSE);

            $table->date('last_activity')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
