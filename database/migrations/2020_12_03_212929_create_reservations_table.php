<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id("idReservation")->unsigned();
            $table->bigInteger("idUser")->index()->unsigned();
            $table->bigInteger("idRoom")->index()->unsigned();
            $table->string("reservation_number");
            $table->integer("reservation_guests_adults");
            $table->integer("reservation_guests_children");
            $table->integer("reservation_guests_babies");
            $table->char("reservation_board");
            $table->date("reservation_checking");
            $table->date("reservation_checkout");
            $table->longText("reservation_requests");
            $table->float("reservation_tax", 2, 2);
            $table->float("reservation_discount", 2, 2);
            $table->float("reservation_total", 6, 2);
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
        Schema::dropIfExists('reservations');
    }
}
