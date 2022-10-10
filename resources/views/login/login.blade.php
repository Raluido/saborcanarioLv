@extends('layouts.slave')
@section('content')

<div class="container-fluid p-0 w-100 d-flex justify-content-center">
    @if (session('error'))
    <h1>{{ Lang::get('login.' . session('error')) }}</h1>
    @endif
    <div class="loginBlade mt-5 text-center">
        <form method="POST" action="/login">
            <input name="_token" type="hidden" value="{{ csrf_token() }}">
            <div class="mt-3 pt-4">
                <label for="email">{{ Lang::get('login.email') }}</label><br>
            </div>
            <div class="">
                <input type="email" id="email" name="email" required><br>
            </div>
            <div class="mt-3">
                <label for="password">{{ Lang::get('login.password') }}</label><br>
            </div>
            <div class="">
                <input type="password" id="password" name="password"><br>
            </div>
            <div class="mt-5">
                <button class="btn btn-primary btn-lg">{{ Lang::get('login.login') }}</button>
            </div>
        </form>
        <div class="mt-4 pb-5">
            <a href="{{ url('/showgoogleform') }}" target="_blank">Loguearse con google</a><br>
        </div>
    </div>
</div>
@endsection
