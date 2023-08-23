<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \App\Models\Room;
use Illuminate\Support\Facades\DB;

class AddRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $room1 = new Room();
        $room1->room_name = "Suit";
        $room1->room_description = "Amplia habitación con vistas a la calle";
        $room1->room_doble_size_bed = 1;
        $room1->room_simple_size_bed = 0;
        $room1->room_sofa_bed = 1;
        $room1->room_bath = 0;
        $room1->price_winter = 67.0;
        $room1->price_summer = 60.00;
        $room1->price_special_dates = 96.00;
        $room1->save();

        $room2 = new Room();
        $room2->room_name = "Habitación Doble";
        $room2->room_description = "Habitación con vistas al patio interior";
        $room2->room_doble_size_bed = 1;
        $room2->room_simple_size_bed = 0;
        $room2->room_sofa_bed = 1;
        $room2->room_bath = 0;
        $room2->price_winter = 67.0;
        $room2->price_summer = 60.00;
        $room2->price_special_dates = 96.00;
        $room2->save();

        $room3 = new Room();
        $room3->room_name = "Habitación Doble";
        $room3->room_description = "Habitación con vistas al patio interior";
        $room3->room_doble_size_bed = 1;
        $room3->room_simple_size_bed = 0;
        $room3->room_sofa_bed = 1;
        $room3->room_bath = 0;
        $room3->price_winter = 67.0;
        $room3->price_summer = 60.00;
        $room3->price_special_dates = 96.00;
        $room3->save();

        $room4 = new Room();
        $room4->room_name = "Habitación Doble";
        $room4->room_description = "Habitación con vistas al patio interior";
        $room4->room_doble_size_bed = 1;
        $room4->room_simple_size_bed = 0;
        $room4->room_sofa_bed = 1;
        $room4->room_bath = 0;
        $room4->price_winter = 67.0;
        $room4->price_summer = 60.00;
        $room4->price_special_dates = 96.00;
        $room4->save();

        $room5 = new Room();
        $room5->room_name = "Habitación Doble";
        $room5->room_description = "Habitación con vistas al patio interior";
        $room5->room_doble_size_bed = 1;
        $room5->room_simple_size_bed = 0;
        $room5->room_sofa_bed = 1;
        $room5->room_bath = 0;
        $room5->price_winter = 67.0;
        $room5->price_summer = 60.00;
        $room5->price_special_dates = 96.00;
        $room5->save();

        $room6 = new Room();
        $room6->room_name = "Habitación Doble";
        $room6->room_description = "Habitación con vistas al patio interior";
        $room6->room_doble_size_bed = 1;
        $room6->room_simple_size_bed = 0;
        $room6->room_sofa_bed = 1;
        $room6->room_bath = 0;
        $room6->price_winter = 67.0;
        $room6->price_summer = 60.00;
        $room6->price_special_dates = 96.00;
        $room6->save();

        $room7 = new Room();
        $room7->room_name = "Habitación Doble";
        $room7->room_description = "Habitación con vistas al patio interior";
        $room7->room_doble_size_bed = 1;
        $room7->room_simple_size_bed = 0;
        $room7->room_sofa_bed = 1;
        $room7->room_bath = 0;
        $room7->price_winter = 67.0;
        $room7->price_summer = 60.00;
        $room7->price_special_dates = 96.00;
        $room7->save();

        $room8 = new Room();
        $room8->room_name = "Habitación Doble";
        $room8->room_description = "Habitación con vistas al patio interior";
        $room8->room_doble_size_bed = 1;
        $room8->room_simple_size_bed = 0;
        $room8->room_sofa_bed = 1;
        $room8->room_bath = 0;
        $room8->price_winter = 96.0;
        $room8->price_summer = 86.00;
        $room8->price_special_dates = 115.00;
        $room8->save();


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        DB::delete('DELETE FROM rooms WHERE room_name = "Suit" OR room_name = "Habitación Doble";');
        Schema::enableForeignKeyConstraints();
    }
}
