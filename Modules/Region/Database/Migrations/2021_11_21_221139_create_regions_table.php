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

            $table->string('name', 50)
                ->unique();
            $table->string('description', 500)
                ->nullable();
            $table->string('emblem')
                ->nullable();

            $table->unsignedBigInteger('region_type_id');
            $table->foreign('region_type_id')
                ->references('id')
                ->on('region_types')
                ->onDelete('cascade');

            $table->unsignedBigInteger('country_id')
                ->nullable();
            $table->foreign('country_id')
                ->references('id')
                ->on('countries')
                ->onDelete('cascade');

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
