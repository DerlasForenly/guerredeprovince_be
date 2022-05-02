<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoliticalPartyStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('political_party_staff', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')
                ->unique();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->unsignedBigInteger('political_party_id');
            $table->foreign('political_party_id')
                ->references('id')
                ->on('political_parties')
                ->onDelete('cascade');

            $table->unsignedBigInteger('position_type_id');
            $table->foreign('position_type_id')
                ->references('id')
                ->on('position_types')
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
        Schema::dropIfExists('political_party_staff');
    }
}
