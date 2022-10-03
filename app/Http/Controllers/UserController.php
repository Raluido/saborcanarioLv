<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Config;
use App\Mail\NewUserNotification;

class UserController extends Controller
{
    public function showRegister(){
        return view('login.register');
    }

    public function register(Request $request){


        if(strlen($request->input('email')) > 30){
            return $this->returnErrorRegister('email_lenght_exceded');
        }

        if(!filter_var($request->input('email'), FILTER_VALIDATE_EMAIL)){
            return $this->returnErrorRegister('error_email_format');
        }

        $emailUser = User::where('user_email_canonical', strtolower($request->input('email')))->get();

        if(!$emailUser->isEmpty()){
            return $this->returnErrorRegister('email_already_used');
        }

        if(strlen($request->input('password')) < 8 || strlen($request->input('password'))> 20){
            return $this->returnErrorRegister('error_password_length');
        }

        if(!preg_match("#[0-9]+#", $request->input('password'))){
            return $this->returnErrorRegister('error_password_numbers');
        }

        if(!preg_match("#[A-Z]+#", $request->input('password'))){
           return $this->returnErrorRegister('error_password_upperCaseLetter');
        }

        if(!preg_match("#[a-z]+#", $request->input('password'))){
            return $this->returnErrorRegister('error_password_lowerCaseLetter');
        }


        $user = new User();
        $user->user_code = $this->generateUserCode();
        $user->email = $request->input('email');
        $user->user_email_canonical = strtolower($user->email);
        $user->password = Hash::make($request->input('password'));
        $user->save();

        Auth::attempt(['email' => $user->email, 'password' => $request->input('password')]);

        return redirect('/');

    }

    public function showLogin(){
        return view('login.login');
    }

    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            return redirect('/');
        }
        else{
            return redirect('/login')->with('error', 'error_credential');
        }

    }

    public function logout(){
        Auth::logout();
        return redirect('/');
        }

    private function generateUserCode(){
        $prefix = config("scconfig.prefix");
        $noCode = true;
        while($noCode){
            $number = rand(100, 999);
            $last = $this->getLetters();
            $code = $prefix.$number.$last;
            $user = User::where('user_code', $code)->get();
            if($user->isEmpty()){
                $noCode = false;
            }
            else{

                $noCode = true;
            }
        }
        return $code;

    }

    public function showFormUserData(){
        $user = User::find(Auth::user()->idUser);
        $userVisual = new User();
        $userVisual->user_name = $user->user_name;
        $userVisual->user_surname = $user->user_surname;
        $userVisual->user_birthday = $user->user_birthday;
        $userVisual->user_address = $user->user_address;
        $userVisual->user_zipcode = $user->user_zipcode;
        $userVisual->user_phone = $user->user_phone;
        $userVisual->user_country = $user->user_country;
        $userVisual->user_taxID = $user->user_taxID;
        $userVisual->user_languages = $user->user_languages;

        return view('/login.formUserData')->with('user', $userVisual);
    }

    public function setFormUserData(Request $request){
        $user = User::find(Auth::user()->idUser);
        $user->user_name = $request->input('user_name');
        $user->user_surname = $request->input('user_surname');
        $user->user_birthday = $request->input('user_birthday');
        $user->user_address = $request->input('user_address');
        $user->user_zipcode = $request->input('user_zipcode');
        $user->user_phone = $request->input('user_phone');
        $user->user_country = $request->input('user_country');
        $user->user_taxID = $request->input('user_taxID');
        $user->user_languages = $request->input('user_languages');
        $user->save();

        return redirect ('/');
    }

    public function testEmail(){
        Mail::to("raluido@gmail.com")->send(new NewUserNotification);
    }

    public function verifiedEmail($code){
        $config = Config::where('config_value', $code)->first();
        if($config != null){
            $user = User::find($config->idUser);
            if($user->user_email_verified == 0){
                $user->user_email_verified = 1;
                $user->save();
            }
        }
        return view('login.emailVerificated');
    }

    private function getLetters(){
        $seed = str_split('ABCDEFGHJKLMNPQRSTUVWXYZ');
        shuffle($seed);
        $rand = '';
        foreach (array_rand($seed, 3) as $k) $rand .= $seed[$k];
        return $rand;
    }

    private function returnErrorRegister($error){
        return redirect('/register')->with('error', $error);
    }
}
