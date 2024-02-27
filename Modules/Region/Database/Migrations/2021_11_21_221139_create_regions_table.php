<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->id();

            $table->string('name')
                ->unique();
            $table->string('description')
                ->nullable();
            $table->string('emblem')
                ->nullable();

            $table->unsignedBigInteger('region_type_id');
            $table->foreign('region_type_id')
                ->references('id')
                ->on('region_types');

            $table->unsignedBigInteger('country_id')
                ->nullable();
            $table->foreign('country_id')
                ->references('id')
                ->on('countries')
                ->onDelete('set null');

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
        Schema::dropIfExists('regions');
    }
}
