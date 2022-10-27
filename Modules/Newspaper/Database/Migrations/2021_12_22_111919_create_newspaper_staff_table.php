<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newspaper_staff', function (Blueprint $table) {
            $table->id('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->unsignedBigInteger('newspaper_id');
            $table->foreign('newspaper_id')
                ->references('id')
                ->on('newspapers')
                ->onDelete('cascade');

            $table->unsignedBigInteger('position_id');
            $table->foreign('position_id')
                ->references('id')
                ->on('positions')
                ->onDelete('cascade');

            $table->string('custom_name')
                ->nullable();

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
        Schema::dropIfExists('newspaper_staff');
    }
};
