<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id("idTicket")->unsigned();
            $table->bigInteger("idUser")->index()->nullable()->unsigned();
            $table->bigInteger("idRoom")->index()->nullable()->unsigned();
            $table->string("ticket_email");
            $table->string("ticket_title");
            $table->longText("ticket_description");
            $table->char("ticket_solve");
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
        Schema::dropIfExists('tickets');
    }
}
