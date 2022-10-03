<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;
use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;
use Cartalyst\Stripe\Laravel\Facades\Stripe;

class PaymentController extends Controller
{
    static function stripePay($amount, $stripeToken){
    	$config = Config::where('config_key', env('STRIPE_CONFIG_USER'))->where('idUser', Auth::user()->idUser)->first();

        if(!$config){
            $customer = Stripe::customers()->create([
                'email' => Auth::user()->email,
            ]);

            $config = new Config();
            $config->idUser = Auth::user()->idUser;
            $config->config_key = env('STRIPE_CONFIG_USER');
            $config->config_value = $customer['id'];
            $config->save();

        } else {
            $customer = Stripe::customers()->find($config->config_value);
        }


        $token = Stripe::tokens()->find($stripeToken);
        $cards = Stripe::cards()->all($customer['id']);
        $find = false;
        foreach ($cards['data'] as $card) {
            if($card['fingerprint'] == $token["card"]['fingerprint']){
                $find = true;
            }
        }

        if(!$find){
            $card = Stripe::cards()->create($customer['id'], $stripeToken);
        }

        $charge = Stripe::charges()->create([
            'customer' => $customer['id'],
            'currency' => 'EUR',
            'amount'   => $amount,
            'metadata' => array('_token', csrf_token()),
        ]);

        return $charge;
    }
}
