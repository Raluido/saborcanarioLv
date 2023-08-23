<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getData($idRoom)
    {

        $arr['data'] = Reservation::where('idRoom', $idRoom)->get();

        echo json_encode($arr);
        exit;
    }
}
