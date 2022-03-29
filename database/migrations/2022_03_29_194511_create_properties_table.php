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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id');
            $table->string('address');
            $table->boolean('is_room');
            $table->boolean('is_house');
            $table->integer('rent');
            $table->text('description');
            $table->string('photo');
            $table->boolean('has_balcony');
            $table->boolean('has_garage');
            $table->boolean('has_dishwasher');
            $table->boolean('allows_pets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
