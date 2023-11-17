<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->foreign('idUser')->references('idUser')->on('users');
            $table->foreign('idRoom')->references('idRoom')->on('rooms');
        });

        Schema::table('invoices', function (Blueprint $table) {
            $table->foreign('idReservation')->references('idReservation')->on('reservations');
        });

        Schema::table('logs', function (Blueprint $table) {
            $table->foreign('idUser')->references('idUser')->on('users');
        });

        Schema::table('tickets', function (Blueprint $table) {
            $table->foreign('idUser')->references('idUser')->on('users');
            $table->foreign('idRoom')->references('idRoom')->on('rooms');
        });

        Schema::table('mailer', function (Blueprint $table) {
            $table->foreign('idReservation')->references('idReservation')->on('reservations');
            $table->foreign('idUser')->references('idUser')->on('users');
        });

        Schema::table('social_logins', function (Blueprint $table) {
            $table->foreign('idUser')->references('idUser')->on('users');
        });

        Schema::table('dishes', function (Blueprint $table) {
            $table->foreign('idDishCategory')->references('idDishCategory')->on('dishes_categories');
            $table->foreign('idMenu')->references('idMenu')->on('menus');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('idProductCategory')->references('idProductCategory')->on('products_categories');
        });

        Schema::table('articles', function (Blueprint $table) {
            $table->foreign('idArticleCategory')->references('idArticleCategory')->on('articles_categories');
        });

        Schema::table('photos', function (Blueprint $table) {
            $table->foreign('idRoom')->references('idRoom')->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropForeign(['idUser']);
            $table->dropForeign(['idRoom']);
        });

        Schema::table('invoices', function (Blueprint $table) {
            $table->dropForeign(['idReservation']);
        });

        Schema::table('logs', function (Blueprint $table) {
            $table->dropForeign(['idUser']);
        });

        Schema::table('tickets', function (Blueprint $table) {
            $table->dropForeign(['idUser']);
            $table->dropForeign(['idRoom']);
        });

        Schema::table('mailer', function (Blueprint $table) {
            $table->dropForeign(['idReservation']);
            $table->dropForeign(['idUser']);
        });

        Schema::table('social_logins', function (Blueprint $table) {
            $table->dropForeign(['idUser']);
        });

        Schema::table('dishes', function (Blueprint $table) {
            $table->dropForeign(['idDishCategory']);
            $table->dropForeign(['idMenu']);
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['idProductCategory']);
        });

        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign(['idArticleCategory']);
        });

        Schema::table('photos', function (Blueprint $table) {
            $table->dropForeign(['idRoom']);
        });
    }
}
