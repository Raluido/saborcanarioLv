@extends('layouts.master')
@section('mainDiv')

<body>
    <div class="container-fluid second-bg px-0 pt-5">
        <div class="w-100 text-center text-white availableTitle">
            <h2>Habitaciones disponibles</h2>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="availableRooms px-5 my-5">
            @if($result1 == 1 && $totalDoubleRooms == 0)
            <p>Tenemos 1 suit disponible desde {{ $startDateFix }} hasta {{ $endDateFix }}</p>
            @endif
            @if($result1 == 0 && $totalDoubleRooms !=0)
            <p>Tenemos {{ $totalDoubleRooms }} habitaciones disponibles desde {{ $startDateFix }} hasta {{ $endDateFix }}</p>
            @endif
            @if($result1 == 0 && $totalDoubleRooms == 0)
            <p>Lo sentimos pero no tenemos habitaciones disponibles desde {{ $startDateFix }} hasta {{ $endDateFix }}</p>
            @endif
            @if($result1 != 0 && $totalDoubleRooms != 0)
            <p>Tenemos nuestra suit y {{ $totalDoubleRooms }} habitaciones dobles disponibles desde {{ $startDateFix }} hasta {{ $endDateFix }}</p>
            @endif
        </div>
        <div class="">
            <div class="my-5 room">
                @if ($result1 == 1)
                <div class="imgRoom">
                    <img class="" src="{{ Storage::url('/media/suit1.jpg') }}">
                </div>
                <div class="mt-5 px-4 infoRoom">
                    <h3 class="mb-4 text-primary">Suit</h3>
                    <div class="mb-4">
                        <p class="">Amplia habitación con vistas a la calle</p>
                    </div>
                    <div class="mb-5">
                        <p>Precio desde 100€ la noche</p>
                    </div>
                    <div class="mb-4">
                        <a class="btn btn-primary" href="{{ url('/showRoom/' . 1 . '/' . $startDateFix . '/' . $endDateFix) }}">Ver
                            habitación</a>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="room">
                @if ($result2 == 1 || $result3 == 1 || $result4 == 1 || $result5 == 1 || $result6 == 1 || $result7 == 1
                ||
                $result8 == 1)
                <div class="imgRoom">
                    <img class="" src="{{ Storage::url('/media/habitaciónDoble1.jpg') }}">
                </div>
                <div class="mt-5 px-4 infoRoom">
                    <h3 class="mb-4 text-primary">Habitación Doble</h3>
                    <div class="mb-4">
                        <p class="">Habitación con vistas al patio interior</p>
                    </div>
                    <div class="mb-5">
                        <p>Precio desde 60€ la noche</p>
                    </div>
                    <div class="mb-4">
                        @if ($result2 == 1)
                        <a class="btn btn-primary" href="{{ url('/showRoom/' . 2 . '/' . $startDateFix . '/' . $endDateFix) }}">Ver
                            habitación</a>
                        @elseif ($result3 == 1)
                        <a class="btn btn-primary" href="{{ url('/showRoom/' . 3 . '/' . $startDateFix . '/' . $endDateFix) }}">Ver
                            habitación</a>
                        @elseif ($result4 == 1)
                        <a class="btn btn-primary" href="{{ url('/showRoom/' . 4 . '/' . $startDateFix . '/' . $endDateFix) }}">Ver
                            habitación</a>
                        @elseif ($result5 == 1)
                        <a class="btn btn-primary" href="{{ url('/showRoom/' . 5 . '/' . $startDateFix . '/' . $endDateFix) }}">Ver
                            habitación</a>
                        @elseif ($result6 == 1)
                        <a class="btn btn-primary" href="{{ url('/showRoom/' . 6 . '/' . $startDateFix . '/' . $endDateFix) }}">Ver
                            habitación</a>
                        @elseif ($result7 == 1)
                        <a class="btn btn-primary" href="{{ url('/showRoom/' . 7 . '/' . $startDateFix . '/' . $endDateFix) }}">Ver
                            habitación</a>
                        @elseif ($result8 == 1)
                        <a class="btn btn-primary" href="{{ url('/showRoom/' . 8 . '/' . $startDateFix . '/' . $endDateFix) }}">Ver
                            habitación</a>
                        @endif
                    </div>
                </div>
                @endif
            </div>
        </div>

    </div>
</body>
@endsection