<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Invoice;
use DateTime;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\Room;

class ReservationController extends Controller
{
    public function reserve(Request $request)
    {
        try {
            $charge_data = PaymentController::stripePay($request->input('total_amount'), "tok_visa");
            $reservation = new Reservation;
            $reservation->idUser = Auth::user()->idUser;
            $reservation->reservation_number = $this->generateReservationCode();
            $reservation->idRoom = $request->input('idroom');
            $reservation->reservation_guests_adults = $request->input('guests');
            $reservation->reservation_guests_children = $request->input('guestsChildren');
            $reservation->reservation_guests_babies = $request->input('guestsBabies');
            $reservation->reservation_tax = $request->input('tax');
            $reservation->reservation_discount = '0';
            $reservation->reservation_board = $request->input('board');
            $reservation->reservation_checking = $request->input('startDate');
            $reservation->reservation_checkout = $request->input('endDate');
            $reservation->reservation_requests = $request->input('comment');
            $reservation->reservation_total = $request->input('total_amount');
            $reservation->save();


            $invoice = new Invoice();
            $invoice->idReservation = $reservation->idReservation;
            $invoice->invoice_number = $charge_data['id'];
            $invoice->reservation_number = $this->generateReservationCode();
            $invoice->invoice_date = Carbon::now();
            $invoice->invoice_discount = '0';
            $invoice->invoice_tax = $request->input('tax');
            $invoice->invoice_total = $reservation->reservation_total;
            $invoice->save();

            return redirect('/');
        } catch (Exception $e) {
        }
    }

    public function calculatePrice($board, $guests, $idRoom, $startDate, $endDate)

    {
        $days = $this->dateDifference($startDate, $endDate, '%a');

        $startDate_arr = explode("-", $startDate);

        $date = date("y-m-d", strtotime($startDate_arr[0] . "/" . $startDate_arr[1] . "/" . $startDate_arr[2]));
        $range1 = date("y-m-d", strtotime("01/02/2022"));
        $range2 = date("y-m-d", strtotime("30/04/2022"));
        $range3 = date("y-m-d", strtotime("01/10/2022"));
        $range4 = date("y-m-d", strtotime("31/01/2023"));
        $range5 = date("y-m-d", strtotime("01/06/2022"));
        $range6 = date("y-m-d", strtotime("30/09/2022"));

        $prices = [];

        for ($i = 0; $i < $days; $i++) {

            if ($idRoom == 1) {
                if ($date > $range1 && $date < $range2) {
                    $value = 110;
                } else if ($date >= $range3 && $date < $range4) {
                    $value = 60;
                }
                if ($date >= $range5 && $date <= $range6) {
                    $value = 150;
                }
                array_push($prices, $value);
            } elseif ($idRoom != 1) {
                if ($date > $range1 && $date < $range2) {
                    $value = 80;
                } else if ($date >= $range3 && $date < $range4) {
                    $value = 70;
                }
                if ($date >= $range5 && $date <= $range6) {
                    $value = 60;
                }
                array_push($prices, $value);
            }
        }

        $sum = array_sum($prices);

        if ($guests == 1) {
            $mult = 1;
        } else if ($guests == 2) {
            $mult = 1.5;
        }
        if ($guests == 3) {
            $mult = 2.3;
        }

        if ($board == 'HB') {
            $board = 1;
        } else {
            $board = 1.1;
        }

        $total_amount = $mult * $sum * $board;

        $format = number_format($total_amount, 2);

        return $format;
    }

    public function generateReservationCode()
    {
        $prefix = config("artconfig.prefix");
        $noCode = true;
        while ($noCode) {
            $number = rand(100, 999);
            $last = $this->getLetters();
            $code = $prefix . $number . $last;
            $reservation = Reservation::where('reservation_number', $code)->get();
            if ($reservation->isEmpty()) {
                $noCode = false;
            } else {

                $noCode = true;
            }
        }
        return $code;
    }

    public function getLetters()
    {
        $seed = str_split('ABCDEFGHJKLMNPQRSTUVWXYZ');
        shuffle($seed);
        $rand = '';
        foreach (array_rand($seed, 3) as $k) $rand .= $seed[$k];
        return $rand;
    }

    public function dateDifference($date_1, $date_2, $differenceFormat = '%a')
    {
        $datetime1 = date_create($date_1);
        $datetime2 = date_create($date_2);

        $interval = date_diff($datetime1, $datetime2);

        return $interval->format($differenceFormat);
    }
}
