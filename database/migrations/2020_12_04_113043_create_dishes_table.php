<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->id("idDish")->unsigned();
            $table->bigInteger("idDishCategory")->index()->unsigned();
            $table->bigInteger("idMenu")->index()->unsigned()->nuleable();
            $table->string("dish_category");
            $table->string("dish_name");
            $table->string("dish_description");
            $table->float("dish_price", 2, 2);
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
        Schema::dropIfExists('dishes');
    }
}
