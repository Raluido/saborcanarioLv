<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <meta name="google-signin-client_id" content="{{ env('GOOGLE_CLIENT_ID') }}">
    <title>Sabor Canario</title>
    <link rel="stylesheet" href="{{ asset('/css/daterangepicker.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
</head>

<body>
    @yield('mainDiv')
    <header>
        <div class="d-flex flex-column">
            <div class="d-flex justify-content-end login">
                <div class="loginText text-white mr-3">
                    @if (Auth::user())
                        <p style="display:block">Hola {{ Auth::user()->email }}</p>
                    @elseif (!Auth::user())
                        <p style="display:block">No estas logueado</p>
                    @endif
                </div>
                <div class="d-flex justify-content-end">
                    <div class="">
                        @if (Auth::user())
                            <a class="nav-link text-white"
                                href="{{ url('/logout') }}">{{ Lang::get('login.logout') }}</a>
                        @elseif (!Auth::user())
                            <a class="nav-link text-white"
                                href="{{ url('/login') }}">{{ Lang::get('login.login') }}</a>
                        @endif
                    </div>
                    <div class="">
                        @if (!Auth::user())
                            <a class="nav-link text-white"
                                href="{{ url('/register') }}">{{ Lang::get('login.register') }}</a>
                        @elseif (Auth::user() && !Auth::user()->user_name == '')
                            <a class="nav-link text-white"
                                href="{{ url('/formuserdata') }}">{{ Lang::get('login.editregister') }}</a>
                        @elseif (Auth::user() && Auth::user()->user_surname == '')
                            <a class="nav-link text-white"
                                href="{{ url('/formuserdata') }}">{{ Lang::get('login.fillregisterout') }}</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-xl-around justify-content-lg-center justify-content-md-center">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{ Storage::url('/media/logotransp.jpg') }}" width="120"
                            height="120"></a>
                </div>
                <div class="mainMenu">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-white mr-3" href="#">Hotel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Restaurante</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer class="mt-5">
        <div class="row">
            <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="text-center">
                    <h3>CONTACTO</h3>
                </div>
                <hr>
                <div class="mt-5">
                    <a class="text-decoration-none text-secondary" href=""><i
                            class="far fa-envelope-open mr-3"></i>info@hotelruralorotava.com</a>
                </div>
                <div class="mt-3">
                    <a class="text-decoration-none text-secondary" href=""><i
                            class="far fa-map mr-3"></i>Localización</a>
                </div>
                <div class="mt-3">
                    <a class="text-decoration-none text-secondary" href=""><i class="fas fa-mobile-alt mr-3"></i>+34 922
                        32 27 93</a>
                </div>
            </div>
            <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <h3>CONECTA CON NOSOTROS</h3>
                <hr>
                <div class="d-flex justify-content-center">
                    <div class="mr-5 mt-5"><i class="fab fa-facebook-square"></i></div>
                    <div class="mr-5 mt-5"><i class="fab fa-twitter"></i></div>
                    <div class="mr-5 mt-5"><i class="fab fa-instagram"></i></div>
                </div>
            </div>
            <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="">
                    <h3>PAGOS ACEPTADOS</h3>
                    <hr>
                </div>
                <div class="pay d-flex mt-5">
                    <div class="mr-3 pl-3 pr-3 pt-2 pb-2">
                        <p>Visa</p>
                    </div>
                    <div class="mr-3 pl-3 pr-3 pt-2 pb-2">
                        <p>PayPal</p>
                    </div>
                    <div class="mr-3 pl-3 pr-3 pt-2 pb-2">
                        <p>MasterCard</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="{{ asset('/js/moment.min.js') }}"></script>
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
    <script type="text/javascript" src="{{ asset('/js/daterangepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/availablerooms.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/ajax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/carousel.js') }}"></script>
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript" src="{{ asset('/js/stripe2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/showPay.js') }}"></script>
</body>

</html>
