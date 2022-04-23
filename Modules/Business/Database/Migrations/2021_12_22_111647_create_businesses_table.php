<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();

            $table->string('name');

            $table->unsignedBigInteger('exp')->default(0);
            $table->unsignedBigInteger('money_amount')->default(0);
            $table->unsignedBigInteger('resource_amount')->default(0);
            $table->unsignedBigInteger('salary_type_id')->default(2);
            $table->foreign('salary_type_id')->references('id')->on('salary_types');
            $table->unsignedBigInteger('salary')->default(90);

            $table->string('description')->nullable();
            $table->string('emblem')->nullable();

            $table->unsignedBigInteger('corporation_id')->nullable();
            $table->foreign('corporation_id')->references('id')->on('corporations');
            $table->unsignedBigInteger('resource_id');
            $table->foreign('resource_id')->references('id')->on('resources');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('region_id');
            $table->foreign('region_id')->references('id')->on('regions');

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
        Schema::dropIfExists('businesses');
    }
}
