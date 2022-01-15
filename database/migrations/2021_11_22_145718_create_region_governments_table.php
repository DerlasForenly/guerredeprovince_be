<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionGovernmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('region_governments', function (Blueprint $table) {
            $table->id('region_id');
            $table->foreign('region_id')->references('id')->on('regions');

            $table->unsignedBigInteger('leader_id');
            $table->foreign('leader_id')->references('id')->on('users');

            $table->string('type')->default('Autonomy');

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
        Schema::dropIfExists('region_governments');
    }
}
