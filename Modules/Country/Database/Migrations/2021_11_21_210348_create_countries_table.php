<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('description', 1000)->nullable();
            $table->string('emblem')->nullable();
            $table->integer('parliament_size')->default(0);
            $table->unsignedBigInteger('government_type_id');
            $table->foreign('government_type_id')->references('id')->on('government_types');
            $table->unsignedBigInteger('nation_id');
            $table->foreign('nation_id')->references('id')->on('nations');
            $table->boolean('closed_borders')->default(FALSE);
            $table->boolean('mandatory_visa')->default(FALSE);
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
        Schema::dropIfExists('countries');
    }
}
