<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Models\Photo;
use Illuminate\Support\Facades\DB;

class AddPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $room1 = new Photo();
        $room1->idRoom = 1;
        $room1->photo_name = 'Suit1';
        $room1->save();

        $room1 = new Photo();
        $room1->idRoom = 1;
        $room1->photo_name = 'Suit2';
        $room1->save();

        $room1 = new Photo();
        $room1->idRoom = 1;
        $room1->photo_name = 'Suit3';
        $room1->save();

        $room1 = new Photo();
        $room1->idRoom = 1;
        $room1->photo_name = 'Suit4';
        $room1->save();

        $room2 = new Photo();
        $room2->idRoom = 2;
        $room2->photo_name = 'Habitación Doble1';
        $room2->save();

        $room2 = new Photo();
        $room2->idRoom = 2;
        $room2->photo_name = 'Habitación Doble2';
        $room2->save();

        $room2 = new Photo();
        $room2->idRoom = 2;
        $room2->photo_name = 'Habitación Doble3';
        $room2->save();

        $room2 = new Photo();
        $room2->idRoom = 2;
        $room2->photo_name = 'Habitación Doble4';
        $room2->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        DB::delete('DELETE FROM photos WHERE photo = "suit1" OR photo = "suit2" OR photo = "suit3" OR photo = "suit4" OR photo = "Habitación Doble1" OR photo = "Habitación Doble2"
        OR photo = "Habitación Doble3" OR photo = "Habitación Doble4";');
        Schema::enableForeignKeyConstraints();
    }
}
