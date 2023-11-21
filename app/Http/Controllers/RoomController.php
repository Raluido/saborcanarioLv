<?php

namespace App\Http\Controllers;

use DateTime;
use DatePeriod;
use DateInterval;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Room;
use App\Models\Photo;

class RoomController extends Controller
{
    public function showAvailability(Request $request)
    {

        $startDate = $request->input('start_Date');
        $endDate = $request->input('end_Date');

        $startDateFix = date("Y-m-d", strtotime($startDate));
        $endDateFix = date("Y-m-d", strtotime($endDate));

        $format = 'Y-m-d';
        $array0 = array();
        $interval = new DateInterval('P1D');
        $realEnd = new DateTime($endDateFix);
        $realEnd->add($interval);
        $period = new DatePeriod(new DateTime($startDateFix), $interval, $realEnd);

        foreach ($period as $date) {
            $array0[] = $date->format($format);
        }

        $reservations1 = DB::table('reservations')->select('idRoom', 'reservation_checking', 'reservation_checkout')->where('idRoom', 1)->get();

        $reservations1_ar = json_decode(json_encode($reservations1), true);

        if ($reservations1_ar == NULL) {
            $result1 = 1;
        } else {
            for ($i = 0; $i <= (count($reservations1_ar) - 1); $i++) {
                $reservations1_arra[$i] = array_values($reservations1_ar[$i]);
                unset($reservations1_arra[$i][0]);
            }


            $array1Last = [];

            for ($i = 0; $i <= (count($reservations1_arra) - 1); $i++) {

                $startDate = date("Y-m-d", strtotime($reservations1_arra[$i][1]));
                $endDate = date("Y-m-d", strtotime($reservations1_arra[$i][2]));

                $format = 'Y-m-d';
                $array1 = array();
                $interval = new DateInterval('P1D');
                $realEnd = new DateTime($endDate);
                $realEnd->add($interval);
                $period = new DatePeriod(new DateTime($startDate), $interval, $realEnd);

                foreach ($period as $date) {
                    $array1[] = $date->format($format);
                }

                array_push($array1Last, $array1);
            };

            $reservation1NoArray = call_user_func_array("array_merge", $array1Last);

            // Comparamos las posibles fechas con la ocupación

            $arrayItem1 = [];

            for ($i = 0; $i <= (count($array0) - 1); $i++) {
                for ($j = 0; $j <= (count($reservation1NoArray) - 1); $j++) {
                    if ($array0[$i] != $reservation1NoArray[$j]) {
                        array_push($arrayItem1, 1);

                        $arraySum1 = array_sum($arrayItem1);

                        if ($arraySum1 == count($array0) * count($reservation1NoArray)) {
                            $result1 = 1;
                        } else {
                            $result1 = 0;
                        };
                    }
                }
            };
        };

        $reservations2 = DB::table('reservations')->select('idRoom', 'reservation_checking', 'reservation_checkout')->where('idRoom', 2)->get();

        $reservations2_ar = json_decode(json_encode($reservations2), true);

        if ($reservations2_ar == NULL) {
            $result2 = 1;
        } else {
            for ($i = 0; $i <= (count($reservations2_ar) - 1); $i++) {
                $reservations2_arra[$i] = array_values($reservations2_ar[$i]);
                unset($reservations2_arra[$i][0]);
            }


            $array2Last = [];

            for ($i = 0; $i <= (count($reservations2_arra) - 1); $i++) {

                $startDate = date("Y-m-d", strtotime($reservations2_arra[$i][1]));
                $endDate = date("Y-m-d", strtotime($reservations2_arra[$i][2]));

                $format = 'Y-m-d';
                $array2 = array();
                $interval = new DateInterval('P1D');
                $realEnd = new DateTime($endDate);
                $realEnd->add($interval);
                $period = new DatePeriod(new DateTime($startDate), $interval, $realEnd);

                foreach ($period as $date) {
                    $array2[] = $date->format($format);
                }

                array_push($array2Last, $array2);
            };

            $reservation2NoArray = call_user_func_array("array_merge", $array2Last);

            // Comparamos las posibles fechas con la ocupación

            $arrayItem2 = [];

            for ($i = 0; $i <= (count($array0) - 1); $i++) {
                for ($j = 0; $j <= (count($reservation2NoArray) - 1); $j++) {
                    if ($array0[$i] != $reservation2NoArray[$j]) {
                        array_push($arrayItem2, 1);

                        $arraySum2 = array_sum($arrayItem2);

                        if ($arraySum2 == count($array0) * count($reservation2NoArray)) {
                            $result2 = 1;
                        } else {
                            $result2 = 0;
                        };
                    }
                }
            };
        };

        $reservations3 = DB::table('reservations')->select('idRoom', 'reservation_checking', 'reservation_checkout')->where('idRoom', 3)->get();

        $reservations3_ar = json_decode(json_encode($reservations3), true);

        if ($reservations3_ar == NULL) {
            $result3 = 1;
        } else {
            for ($i = 0; $i <= (count($reservations3_ar) - 1); $i++) {
                $reservations3_arra[$i] = array_values($reservations3_ar[$i]);
                unset($reservations3_arra[$i][0]);
            }


            $array3Last = [];

            for ($i = 0; $i <= (count($reservations3_arra) - 1); $i++) {

                $startDate = date("Y-m-d", strtotime($reservations3_arra[$i][1]));
                $endDate = date("Y-m-d", strtotime($reservations3_arra[$i][2]));

                $format = 'Y-m-d';
                $array3 = array();
                $interval = new DateInterval('P1D');
                $realEnd = new DateTime($endDate);
                $realEnd->add($interval);
                $period = new DatePeriod(new DateTime($startDate), $interval, $realEnd);

                foreach ($period as $date) {
                    $array3[] = $date->format($format);
                }

                array_push($array3Last, $array3);
            };

            $reservation3NoArray = call_user_func_array("array_merge", $array3Last);

            // Comparamos las posibles fechas con la ocupación

            $arrayItem3 = [];

            for ($i = 0; $i <= (count($array0) - 1); $i++) {
                for ($j = 0; $j <= (count($reservation3NoArray) - 1); $j++) {
                    if ($array0[$i] != $reservation3NoArray[$j]) {
                        array_push($arrayItem3, 1);

                        $arraySum3 = array_sum($arrayItem3);

                        if ($arraySum3 == count($array0) * count($reservation3NoArray)) {
                            $result3 = 1;
                        } else {
                            $result3 = 0;
                        };
                    }
                }
            };
        };

        $reservations4 = DB::table('reservations')->select('idRoom', 'reservation_checking', 'reservation_checkout')->where('idRoom', 4)->get();

        $reservations4_ar = json_decode(json_encode($reservations4), true);

        if ($reservations4_ar == NULL) {
            $result4 = 1;
        } else {
            for ($i = 0; $i <= (count($reservations4_ar) - 1); $i++) {
                $reservations4_arra[$i] = array_values($reservations4_ar[$i]);
                unset($reservations4_arra[$i][0]);
            }


            $array4Last = [];

            for ($i = 0; $i <= (count($reservations4_arra) - 1); $i++) {

                $startDate = date("Y-m-d", strtotime($reservations4_arra[$i][1]));
                $endDate = date("Y-m-d", strtotime($reservations4_arra[$i][2]));

                $format = 'Y-m-d';
                $array4 = array();
                $interval = new DateInterval('P1D');
                $realEnd = new DateTime($endDate);
                $realEnd->add($interval);
                $period = new DatePeriod(new DateTime($startDate), $interval, $realEnd);

                foreach ($period as $date) {
                    $array4[] = $date->format($format);
                }

                array_push($array4Last, $array4);
            };

            $reservation4NoArray = call_user_func_array("array_merge", $array4Last);

            // Comparamos las posibles fechas con la ocupación

            $arrayItem4 = [];

            for ($i = 0; $i <= (count($array0) - 1); $i++) {
                for ($j = 0; $j <= (count($reservation4NoArray) - 1); $j++) {
                    if ($array0[$i] != $reservation4NoArray[$j]) {
                        array_push($arrayItem4, 1);

                        $arraySum4 = array_sum($arrayItem4);

                        if ($arraySum4 == count($array0) * count($reservation4NoArray)) {
                            $result4 = 1;
                        } else {
                            $result4 = 0;
                        };
                    }
                }
            };
        };

        $reservations5 = DB::table('reservations')->select('idRoom', 'reservation_checking', 'reservation_checkout')->where('idRoom', 5)->get();

        $reservations5_ar = json_decode(json_encode($reservations5), true);

        if ($reservations5_ar == NULL) {
            $result5 = 1;
        } else {
            for ($i = 0; $i <= (count($reservations5_ar) - 1); $i++) {
                $reservations5_arra[$i] = array_values($reservations5_ar[$i]);
                unset($reservations5_arra[$i][0]);
            }


            $array5Last = [];

            for ($i = 0; $i <= (count($reservations5_arra) - 1); $i++) {

                $startDate = date("Y-m-d", strtotime($reservations5_arra[$i][1]));
                $endDate = date("Y-m-d", strtotime($reservations5_arra[$i][2]));

                $format = 'Y-m-d';
                $array5 = array();
                $interval = new DateInterval('P1D');
                $realEnd = new DateTime($endDate);
                $realEnd->add($interval);
                $period = new DatePeriod(new DateTime($startDate), $interval, $realEnd);

                foreach ($period as $date) {
                    $array5[] = $date->format($format);
                }

                array_push($array5Last, $array5);
            };

            $reservation5NoArray = call_user_func_array("array_merge", $array5Last);

            // Comparamos las posibles fechas con la ocupación

            $arrayItem5 = [];

            for ($i = 0; $i <= (count($array0) - 1); $i++) {
                for ($j = 0; $j <= (count($reservation5NoArray) - 1); $j++) {
                    if ($array0[$i] != $reservation5NoArray[$j]) {
                        array_push($arrayItem5, 1);

                        $arraySum5 = array_sum($arrayItem5);

                        if ($arraySum5 == count($array0) * count($reservation5NoArray)) {
                            $result5 = 1;
                        } else {
                            $result5 = 0;
                        };
                    }
                }
            };
        };

        $reservations6 = DB::table('reservations')->select('idRoom', 'reservation_checking', 'reservation_checkout')->where('idRoom', 6)->get();

        $reservations6_ar = json_decode(json_encode($reservations6), true);

        if ($reservations6_ar == NULL) {
            $result6 = 1;
        } else {
            for ($i = 0; $i <= (count($reservations6_ar) - 1); $i++) {
                $reservations6_arra[$i] = array_values($reservations6_ar[$i]);
                unset($reservations6_arra[$i][0]);
            }


            $array6Last = [];

            for ($i = 0; $i <= (count($reservations6_arra) - 1); $i++) {

                $startDate = date("Y-m-d", strtotime($reservations6_arra[$i][1]));
                $endDate = date("Y-m-d", strtotime($reservations6_arra[$i][2]));

                $format = 'Y-m-d';
                $array6 = array();
                $interval = new DateInterval('P1D');
                $realEnd = new DateTime($endDate);
                $realEnd->add($interval);
                $period = new DatePeriod(new DateTime($startDate), $interval, $realEnd);

                foreach ($period as $date) {
                    $array6[] = $date->format($format);
                }

                array_push($array6Last, $array6);
            };

            $reservation6NoArray = call_user_func_array("array_merge", $array6Last);

            // Comparamos las posibles fechas con la ocupación

            $arrayItem6 = [];

            for ($i = 0; $i <= (count($array0) - 1); $i++) {
                for ($j = 0; $j <= (count($reservation6NoArray) - 1); $j++) {
                    if ($array0[$i] != $reservation6NoArray[$j]) {
                        array_push($arrayItem6, 1);

                        $arraySum6 = array_sum($arrayItem6);

                        if ($arraySum6 == count($array0) * count($reservation6NoArray)) {
                            $result6 = 1;
                        } else {
                            $result6 = 0;
                        };
                    }
                }
            };
        };

        $reservations7 = DB::table('reservations')->select('idRoom', 'reservation_checking', 'reservation_checkout')->where('idRoom', 7)->get();

        $reservations7_ar = json_decode(json_encode($reservations7), true);

        if ($reservations7_ar == NULL) {
            $result7 = 1;
        } else {
            for ($i = 0; $i <= (count($reservations7_ar) - 1); $i++) {
                $reservations7_arra[$i] = array_values($reservations7_ar[$i]);
                unset($reservations7_arra[$i][0]);
            }


            $array7Last = [];

            for ($i = 0; $i <= (count($reservations7_arra) - 1); $i++) {

                $startDate = date("Y-m-d", strtotime($reservations7_arra[$i][1]));
                $endDate = date("Y-m-d", strtotime($reservations7_arra[$i][2]));

                $format = 'Y-m-d';
                $array7 = array();
                $interval = new DateInterval('P1D');
                $realEnd = new DateTime($endDate);
                $realEnd->add($interval);
                $period = new DatePeriod(new DateTime($startDate), $interval, $realEnd);

                foreach ($period as $date) {
                    $array7[] = $date->format($format);
                }

                array_push($array7Last, $array7);
            };

            $reservation7NoArray = call_user_func_array("array_merge", $array7Last);

            // Comparamos las posibles fechas con la ocupación

            $arrayItem7 = [];

            for ($i = 0; $i <= (count($array0) - 1); $i++) {
                for ($j = 0; $j <= (count($reservation7NoArray) - 1); $j++) {
                    if ($array0[$i] != $reservation7NoArray[$j]) {
                        array_push($arrayItem7, 1);

                        $arraySum7 = array_sum($arrayItem7);

                        if ($arraySum7 == count($array0) * count($reservation7NoArray)) {
                            $result7 = 1;
                        } else {
                            $result7 = 0;
                        };
                    }
                }
            };
        };

        $reservations8 = DB::table('reservations')->select('idRoom', 'reservation_checking', 'reservation_checkout')->where('idRoom', 8)->get();

        $reservations8_ar = json_decode(json_encode($reservations8), true);

        if ($reservations8_ar == NULL) {
            $result8 = 1;
        } else {
            for ($i = 0; $i <= (count($reservations8_ar) - 1); $i++) {
                $reservations8_arra[$i] = array_values($reservations8_ar[$i]);
                unset($reservations8_arra[$i][0]);
            }


            $array8Last = [];

            for ($i = 0; $i <= (count($reservations8_arra) - 1); $i++) {

                $startDate = date("Y-m-d", strtotime($reservations8_arra[$i][1]));
                $endDate = date("Y-m-d", strtotime($reservations8_arra[$i][2]));

                $format = 'Y-m-d';
                $array8 = array();
                $interval = new DateInterval('P1D');
                $realEnd = new DateTime($endDate);
                $realEnd->add($interval);
                $period = new DatePeriod(new DateTime($startDate), $interval, $realEnd);

                foreach ($period as $date) {
                    $array8[] = $date->format($format);
                }

                array_push($array8Last, $array8);
            };

            $reservation8NoArray = call_user_func_array("array_merge", $array8Last);

            // Comparamos las posibles fechas con la ocupación

            $arrayItem8 = [];

            for ($i = 0; $i <= (count($array0) - 1); $i++) {
                for ($j = 0; $j <= (count($reservation8NoArray) - 1); $j++) {
                    if ($array0[$i] != $reservation8NoArray[$j]) {
                        array_push($arrayItem8, 1);

                        $arraySum8 = array_sum($arrayItem8);

                        if ($arraySum8 == count($array0) * count($reservation8NoArray)) {
                            $result8 = 1;
                        } else {
                            $result8 = 0;
                        };
                    }
                }
            };
        };

        $doubleRooms = [$result2, $result3, $result4, $result5, $result6, $result7, $result8];
        $totalDoubleRooms = array_sum($doubleRooms);

        return view('room.room')
            ->with('result1', $result1)
            ->with('result2', $result2)
            ->with('result3', $result3)
            ->with('result4', $result4)
            ->with('result5', $result5)
            ->with('result6', $result6)
            ->with('result7', $result7)
            ->with('result8', $result8)
            ->with('startDateFix', $startDateFix)
            ->with('endDateFix', $endDateFix)
            ->with('totalDoubleRooms', $totalDoubleRooms);
    }

    public function showRoom($idRoom, $startDate, $endDate)
    {
        $board = "";
        $guests = 0;
        $comment = "";
        $total_amount = 0;
        $room = Room::where('idRoom', $idRoom)->first();
        $photos = Photo::where('idRoom', $room->idRoom)->get();

        return view('room.showRoom', compact('room', 'photos', 'startDate', 'endDate', 'total_amount', 'comment', 'guests', 'board'));
    }
}
