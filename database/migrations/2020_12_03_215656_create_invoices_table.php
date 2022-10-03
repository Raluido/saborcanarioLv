<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id("idInvoice")->unsigned();
            $table->bigInteger("idReservation")->index()->unsigned();
            $table->string("invoice_number");
            $table->string("reservation_number");
            $table->date("invoice_date");
            $table->char("invoice_cancelled")->default(0);
            $table->float("invoice_discount", 2, 2);
            $table->float("invoice_tax", 2, 2);
            $table->float("invoice_total", 2, 2);
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
        Schema::dropIfExists('invoices');
    }
}
