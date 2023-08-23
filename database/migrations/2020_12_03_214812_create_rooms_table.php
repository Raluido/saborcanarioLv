<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id("idRoom")->unsigned();
            $table->string("room_name");
            $table->longText("room_description");
            $table->integer("room_doble_size_bed");
            $table->integer("room_simple_size_bed");
            $table->integer("room_sofa_bed");
            $table->char("room_bath");
            $table->float("price_winter", 5, 2);
            $table->float("price_summer", 5, 2);
            $table->float("price_special_dates", 5, 2);
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
        Schema::dropIfExists('rooms');
    }
}
