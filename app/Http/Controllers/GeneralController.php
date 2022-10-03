<?php

namespace App\Http\Controllers;

use App\Models\Room;

class GeneralController extends Controller
{
    public function showHome(){
        $rooms = Room::all();
        return view('home')->with('rooms', $rooms);
    }
}
