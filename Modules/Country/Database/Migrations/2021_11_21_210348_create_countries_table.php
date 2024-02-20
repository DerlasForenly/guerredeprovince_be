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
    public function up(): void
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();

            $table->string('name')->unique();
            $table->string('color')->nullable();
            $table->string('border_color')->nullable();
            $table->string('description', 600)->nullable();
            $table->string('emblem')->nullable();
            $table->integer('parliament_size')->default(0);
            $table->boolean('closed_borders')->default(false);
            $table->boolean('mandatory_visa')->default(false);

            $table->unsignedBigInteger('government_type_id');
            $table->foreign('government_type_id')
                ->references('id')
                ->on('government_types')
                ->onDelete('cascade');

            $table->unsignedBigInteger('nation_id');
            $table->foreign('nation_id')
                ->references('id')
                ->on('nations')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
