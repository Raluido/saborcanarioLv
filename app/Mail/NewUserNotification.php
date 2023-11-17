<?php

namespace App\Mail;

use Illuminate\Support\Facades\Auth;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Mailer;
use App\Models\Config;

class NewUserNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $config = new Config();
        $config->idUser = Auth::user()->idUser;
        $config->config_key = env('EMAIL_VERIFICATION_CONFIG');
        $config->config_value = $this->getVerificationKey();
        $config->save();

        $mailer = new Mailer();
        $mailer->idUser = Auth::user()->idUser;
        $mailer->mailer_email = Auth::user()->email;
        $mailer->mailer_subject = "Bienvenido a SaborCanario";
        $mailer->mailer_content = view('emails.newUser')->with('verified_key', $config->config_value);
        $mailer->mailer_status = 1;
        $mailer->mailer_intents = 0;
        $mailer->save();

        return $this->from("raluido@gmail.com")->subject('Bienvenido a SaborCanario')->view('emails.newUser')->with('verified_key', $config->config_value);
    }

    public function getVerificationKey(){
        $noFound = true;
        $seed = str_split('ABCDEFGHJKLMNPQRSTUVWXYZABCDEFGHJKLMNPQRSTUVWXYZ');
        shuffle($seed);
        while($noFound){
            $rand = '';
            foreach (array_rand($seed, 32) as $k) $rand .= $seed[$k];
            $config = Config::where('config_value', $rand)->get();
            if($config->isEmpty()){
                $noFound = false;
            }
        }
        return $rand;
    }
}
