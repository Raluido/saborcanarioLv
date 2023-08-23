<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <meta name="google-signin-client_id" content="{{ env('GOOGLE_CLIENT_ID') }}">
    <title>Sabor Canario</title>
    <link rel="icon" type="image/x-icon" href="{{ Storage::url('/media/logo2-removebg-preview.png') }}">
    <link rel="stylesheet" href="{{ asset('/css/daterangepicker.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Uchen&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg py-0">
            <div class="container-fluid dropDownMenu">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-around align-items-center" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <button class="buttonLanguage" onclick="toggleLanguage('Español')"><a class="text-decoration-none text-secondary" href="#">Español</a></button>
                        </li>
                        <li class="nav-item">
                            <button class="buttonLanguage" onclick="toggleLanguage('English')"><a class="text-decoration-none text-secondary" href="#">English</a></button>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item me-3">
                            <a class="text-decoration-none text-secondary" id="transContact" href="mailto:info@hotelruralorotava.es"><i class="far fa-envelope-open me-1"></i>Contacta</a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="text-decoration-none text-secondary" id="transFind" href="https://goo.gl/maps/i3DLVeCKVow1m9SN9" target="_blank"><i class="far fa-map me-1"></i>Como
                                encontrarnos</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-decoration-none text-secondary" id="transPhone" href="tel:+34922322793"><i class="fas fa-mobile-alt me-1"></i>Teléfono</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        @if (Auth::user())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hola {{ Auth::user()->email }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    @if (Auth::user() && !Auth::user()->user_name == '')
                                    <a class="dropdown-item" href="{{ url('/formuserdata') }}">{{ Lang::get('login.editregister') }}</a>
                                    @elseif (Auth::user() && Auth::user()->user_surname == '')
                                    <a class="dropdown-item" href="{{ url('/formuserdata') }}">{{ Lang::get('login.fillregisterout') }}</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ url('/logout') }}">{{ Lang::get('login.logout') }}</a>
                                </li>
                            </ul>
                        </li>
                        @elseif (!Auth::user())
                        <li>
                            <a class="nav-link text-secondary" href="{{ url('/login') }}">{{ Lang::get('login.login') }}</a>
                        </li>
                        <li>
                            <a class="nav-link text-secondary" href="{{ url('/register') }}">{{ Lang::get('login.register') }}</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="d-none d-xl-flex d-lg-flex d-md-none d-sm-none justify-content-sm-around justify-content-md-around justify-content-lg-around">
            <div class="">
                <a href="{{ url('/') }}"><img src="{{ Storage::url('/media/logotransp.jpg') }}" width="160" height="160"></a>
            </div>
            <div class="d-flex pt-5 w-25 fs-4">
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
    </header>
    @yield('mainDiv')
    <footer class="mt-5">
        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-12 col-xl-4 col-lg-4 col-md-12 col-sm-12 mt-5">
                    <div class="d-flex justify-content-center">
                        <div class="d-inline-block">
                            <h3 class="text-center" id="transFooter1">Contacto</h3>
                            <hr class="mx-auto w-50">
                        </div>
                    </div>
                    <div class="ps-4 mt-5 d-flex flex-column align-items-center">
                        <div class="">
                            <div class="">
                                <a class="text-decoration-none text-secondary" href="mailto:info@hotelruralorotava.es" target="_blank"><i class="far fa-envelope-open me-3"></i>info@hotelruralorotava.com</a>
                            </div>
                            <div class="mt-3">
                                <a class="text-decoration-none text-secondary" href="https://goo.gl/maps/i3DLVeCKVow1m9SN9" target="_blank" id="transFooter12"><i class="far fa-map me-3"></i>Localización</a>
                            </div>
                            <div class="mt-3">
                                <a class="text-decoration-none text-secondary" href="tel:+34922322793"><i class="fas fa-mobile-alt me-3"></i>+34
                                    922
                                    32 27 93</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-lg-4 col-md-12 col-sm-12 mt-5">
                    <div class="d-flex justify-content-center">
                        <div class="d-inline-block">
                            <h3 class="text-center" id="transSocial">Conectate</h3>
                            <hr class="mx-auto w-50">
                        </div>
                    </div>
                    <div class="w-100 d-flex mt-5 justify-content-center">
                        <div class="me-4"><a href="https://es-es.facebook.com/sabor.canario/" target="_blank"><i class="fs-4 fab fa-facebook-square text-dark"></i></a></div>
                        <div class="ms-4"><a href="https://www.instagram.com/saborcanario/?hl=en" target="_blank"><i class="fs-4 fab fa-instagram text-dark"></i></a></div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-lg-4 col-md-12 col-sm-12 mt-5">
                    <div class="d-flex justify-content-center">
                        <div class="d-inline-block">
                            <h3 class="text-center" id="transSocial1">Tarjetas</h3>
                            <hr class="mx-auto w-50">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <div class="border border-secondary me-3 px-2 py-1 d-flex align-items-center">
                            <p class="mb-0">Visa</p>
                        </div>
                        <div class="border border-secondary me-3 px-2 d-flex align-items-center">
                            <p class="mb-0">PayPal</p>
                        </div>
                        <div class="border border-secondary px-2 d-flex align-items-center">
                            <p class="mb-0">MasterCard</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="registered d-flex text-center justify-content-sm-end me-sm-5">
            <p class="fw-lighter text-secondary" id="transRegistered">&regEsta web ha sido desarrollada por <a class="text-decoration-none text-dark" href="https://WebsiWebs.es">WebsiWebs</a> con cariño, HTML,
                CSS y JS.</p>
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
    <!-- <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script> -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/daterangepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/availablerooms.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/ajax.js') }}"></script>
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript" src="{{ asset('/js/stripe2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/showPay.js') }}"></script>
    @yield('js')
</body>

</html>