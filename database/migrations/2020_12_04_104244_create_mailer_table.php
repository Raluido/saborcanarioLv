<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mailer', function (Blueprint $table) {
            $table->id("idMailer")->unsigned();
            $table->bigInteger("idReservation")->index()->unsigned()->nullable();
            $table->bigInteger("idUser")->index()->unsigned();
            $table->string("mailer_subject");
            $table->longText("mailer_content");
            $table->string("mailer_email");
            $table->char("mailer_status");
            $table->integer("mailer_intents");
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
        Schema::dropIfExists('mailer');
    }
}
