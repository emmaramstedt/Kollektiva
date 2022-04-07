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
            $table->boolean('is_room');
            $table->boolean('is_house');
            $table->boolean('is_furnished');
            $table->integer('square_metres');
            $table->integer('rooms');
            $table->integer('number_inhabitants');
            $table->string('street');
            $table->integer('street_number');
            $table->integer('post_code');
            $table->string('city');
            $table->boolean('has_fridge');
            $table->boolean('has_freezer');
            $table->boolean('has_oven');
            $table->boolean('has_dishwasher');
            $table->boolean('has_microwave');
            $table->boolean('private_shower');
            $table->boolean('private_toilet');
            $table->boolean('private_bath_tub');
            $table->boolean('has_laundry_machine');
            $table->boolean('has_dryer');
            $table->boolean('communal_laundry');
            $table->boolean('has_balcony');
            $table->boolean('has_sauna');
            $table->boolean('has_jacuzzi');
            $table->boolean('has_pool');
            $table->boolean('has_fireplace');
            $table->integer('year_of_construction');
            $table->integer('years_since_bathroom_renovation');
            $table->integer('years_since_kitchen_renovation');
            $table->date('move_in_date');
            $table->date('move_out_date');
            $table->text('description');
            $table->integer('rent');
            $table->foreignId('photo_id');
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
