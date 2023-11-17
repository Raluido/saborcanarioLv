@extends('layouts.master')

@section("content")

<form method="POST" action="/formuserdata">

    <input name="_token" type="hidden" value="{{ csrf_token() }}">

    <label for="user_name">{{ Lang::get('login.user_name') }}</label><br>
    <input type="text" id="user_name" name="user_name" value="{{ $user->user_name }}" required><br>
    <label for="user_surname">{{ Lang::get('login.user_surname') }}</label><br>
    <input type="text" id="user_surname" name="user_surname" value="{{ $user->user_surname }}" required><br>
    <label for="user_birthday">{{ Lang::get('login.user_birthday') }}</label><br>
    <input type="date" id="user_birthday" name="user_birthday" value="{{ $user->user_birthday }}" required><br>
    <label for="user_address">{{ Lang::get('login.user_address') }}</label><br>
    <input type="text" id="user_address" name="user_address" value="{{ $user->user_address }}" required><br>
    <label for="user_zipcode">{{ Lang::get('login.user_zipcode') }}</label><br>
    <input type="text" id="user_zipcode" name="user_zipcode" value="{{ $user->user_zipcode }}" required><br>
    <label for="user_phone">{{ Lang::get('login.user_phone') }}</label><br>
    <input type="tel" id="user_phone" name="user_phone" value="{{ $user->user_phone }}" required><br>
    <label for="user_country">{{ Lang::get('login.user_country') }}</label><br>
    <input type="text" id="user_country" name="user_country" value="{{ $user->user_country }}" required><br>
    <label for="user_taxID">{{ Lang::get('login.user_taxID') }}</label><br>
    <input type="text" id="user_taxID" name="user_taxID" value="{{ $user->user_taxID }}" required><br>
    <label for="user_languages">{{ Lang::get('login.user_languages') }}</label><br>
    <input type="text" id="user_languages" name="user_languages" value="{{ $user->user_languages }}" required><br>
    <button>{{ Lang::get('login.send') }}</button>
</form>

@endsection

