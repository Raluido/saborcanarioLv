<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <meta name="google-signin-client_id" content="{{ env('GOOGLE_CLIENT_ID') }}">
    <title>Sabor Canario</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <div class="d-flex flex-column">
            <div class="d-flex justify-content-end login">
                <div class="text-white">
                    @if (Auth::user())
                    <p>Hola {{ Auth::user()->email }}</p>
                    @endif
                    @if (!Auth::user())
                    <p>No estas logueado</p>
                    @endif
                </div>
                <div class="d-flex justify-content-end ms-3">
                    <div class="text-center">
                        @if (Auth::user())
                        <a class="nav-link text-white" href="{{ url('/logout') }}">{{ Lang::get('login.logout') }}</a>
                        @elseif (!Auth::user())
                        <a class="nav-link text-white" href="{{ url('/login') }}">{{ Lang::get('login.login') }}</a>
                        @endif
                    </div>
                    <div class="text-center ms-3 me-3">
                        @if (!Auth::user())
                        <a class="nav-link text-white" href="{{ url('/register') }}">{{ Lang::get('login.register') }}</a>
                        @elseif (Auth::user() && !Auth::user()->user_name == '')
                        <a class="nav-link text-white" href="{{ url('/formuserdata') }}">{{ Lang::get('login.editregister') }}</a>
                        @elseif (Auth::user() && Auth::user()->user_surname == '')
                        <a class="nav-link text-white" href="{{ url('/formuserdata') }}">{{ Lang::get('login.fillregisterout') }}</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-around">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{ Storage::url('/media/logotransp.jpg') }}" width="120" height="120"></a>
                </div>
                <div class="mainMenu">
                    <!-- <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-dark mr-3" href="#">Hotel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Restaurante</a>
                        </li>
                    </ul> -->
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <script>
        function onSuccess(googleUser) {
            console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
        }

        function onFailure(error) {
            console.log(error);
        }

        function renderButton() {
            gapi.signin2.render('my-signin2', {
                'scope': 'profile email',
                'width': 240,
                'height': 50,
                'longtitle': true,
                'theme': 'dark',
                'onsuccess': onSuccess,
                'onfailure': onFailure
            });
        }
    </script>
    <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>