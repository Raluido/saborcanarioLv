<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id("idUser")->unsigned();
            $table->string("user_code");
            $table->string("email");
            $table->string("user_email_canonical");
            $table->string("user_name")->nullable();
            $table->string("user_surname")->nullable();
            $table->date("user_birthday")->nullable();
            $table->string("user_address")->nullable();
            $table->string("user_zipcode")->nullable();
            $table->string("user_phone")->nullable();
            $table->string("user_country")->nullable();
            $table->char("user_verified")->default(0);
            $table->string("user_languages")->nullable();
            $table->string("password");
            $table->string("user_taxID")->nullable();
            $table->char("user_email_verified")->default(0);
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
        Schema::dropIfExists('users');
    }
}
