<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function showHome()
    {
        $rooms = Room::all();
        return view('home')->with('rooms', $rooms);
    }
}
