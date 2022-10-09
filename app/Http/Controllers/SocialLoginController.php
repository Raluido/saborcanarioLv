<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Config;
use App\Mail\NewUserNotification;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Log;


class SocialLoginController extends Controller
{
    public function registerGoogle()
    {
        $socialUser = Socialite::driver('google')->user();

        session(['socialUser' => $socialUser]);

        $userExists = User::where('email', $socialUser->email)->first();

        if ($userExists == null) {
            $socialUser = session('socialUser');
            $user = new User();
            $user->user_code = $this->generateUserCode();
            $user->email = $socialUser->email;
            $user->user_name = $socialUser->user['given_name'];
            $user->user_surname = $socialUser->user['family_name'];
            $user->user_email_canonical = strtolower($user->email);
            $password = $socialUser->token;
            $user->password = Hash::make($password);
            $user->save();

            Auth::attempt(['email' => $user->email, 'password' => $password]);

            Mail::to($user->user_email_canonical)->send(new NewUserNotification);

            session()->forget('socialUser');
        } else {
            Auth::login($userExists);
        }
        return redirect('/');
    }

    public function showGoogleForm()
    {
        return Socialite::driver('google')->redirect();
    }

    public function generateUserCode()
    {
        $prefix = config("ggconfig.prefix");
        $noCode = true;
        while ($noCode) {
            $number = rand(100, 999);
            $last = $this->getLetters();
            $code = $prefix . $number . $last;
            $user = User::where('user_code', $code)->get();
            if ($user->isEmpty()) {
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
}
