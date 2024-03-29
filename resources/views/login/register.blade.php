@extends('layouts.slave')
@section('content')

<div class="container w-100 d-flex justify-content-center">
    @if (session('error'))
    <h1>{{ Lang::get('login.' . session('error')) }}</h1>
    @endif
    <div class="loginBlade mt-5 text-center">
        <form method="POST" action="/register">
            <input name="_token" type="hidden" value="{{ csrf_token() }}">
            <input type="hidden" value="{{ $idRoom }}" name="idRoom">
            <input type="hidden" value="{{ $startDate }}" name="startDate">
            <input type="hidden" value="{{ $endDate }}" name="endDate">
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
                <button class="btn btn-primary btn-lg">{{ Lang::get('login.send') }}</button><br>
            </div>
        </form>
        <div class="my-4">
            <form action="{{ route('user.showGoogleForm') }}" method="get">
                <input type="hidden" value="{{ $idRoom }}" name="idRoom">
                <input type="hidden" value="{{ $startDate }}" name="startDate">
                <input type="hidden" value="{{ $endDate }}" name="endDate">
                <input type="submit" value="Registrarse con google">
            </form>
        </div>
    </div>
</div>
@endsection