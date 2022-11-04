@extends('layouts.master')
@section('mainDiv')

<body>
    <div class="container-fluid third-bg p-0">
        @endsection
        @section('content')
        <div class="roomChoose w-100 text-center text-white">
            <h2>Realizar reserva</h2>
        </div>
    </div>
    <div class="container-fluid mt-5">
        @if ($room->idRoom == 1)
        <div class="">
            <div class="">
                <div class="my-5">
                    <div class="">
                        <div class="text-center mb-5">
                            <h3>{{ $room->room_name }}</h3>
                        </div>
                        <ul>
                            <li class="">Amplia habitación con vistas a la calle</li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="csslider infinity" id="slider1">
                        <input type="radio" name="slides" checked="checked" id="slides_1" />
                        <input type="radio" name="slides" id="slides_2" />
                        <ul class="obgaleria" id="galeria1">
                            <li><img class="galleryImg" src="{{ Storage::url('media/suit1.jpg') }}"></li>
                            <li><img class="galleryImg" src="{{ Storage::url('media/suit2.jpg') }}"></li>
                        </ul>
                        <div class="arrows">
                            <label for="slides_1"></label>
                            <label for="slides_2"></label>
                            <label class="goto-first" for="slides_1"></label>
                            <label class="goto-last" for="slides_2"></label>
                        </div>
                        <div class="navigation d-none d-lg-block mt-3">
                            <div>
                                <label for="slides_1"><img width="90vw" height="90vh" src="{{ Storage::url('media/suit1.jpg') }}" /></label>
                                <label for="slides_2"><img width="90vw" height="90vh" src="{{ Storage::url('media/suit2.jpg') }}" /></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4" style="border: 1px solid black">
                @if (Auth::user())
                <div class="text-primary">
                    <h3>Detalles de la reserva</h3>
                </div>
                <div class="">
                    <h4>Suit</h4>
                </div>
                <div class="">
                    <p>Día de llegada: {{ $startDate }}, desde las 14:00 pm</p>
                </div>
                <div class="">
                    <p>Día de salida: {{ $endDate }}, hasta las 12:00 pm</p>
                </div>

                <form method="POST" action="/showRoom/stripe" id="payment-form">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <input name="idroom" id="idroom" value="{{ $room->idRoom }}" type="hidden" />
                    <input name="startDate" id="startDate" value="{{ $startDate }}" type="hidden" />
                    <input name="endDate" id="endDate" value="{{ $endDate }}" type="hidden" />
                    <div class="mb-2">
                        <br><label for="guests">Número de Adultos</label>
                        <select name="guests" id="guests">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select><br><br>
                    </div>
                    <div class="mb-2">
                        <br><label for="guestsChildren">Número de Niños</label>
                        <select name="guestsChildren" id="guestsChildren">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select><br><br>
                    </div>
                    <div class="mb-2">
                        <br><label for="guestsBabies">Número de Bebés</label>
                        <select name="guestsBabies" id="guestsBabies">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select><br><br>
                    </div>
                    <div class="mb-2">
                        <label for="board">Pensión</label>
                        <select name="board" id="board">
                            <option value="HB">Media Pensión</option>
                            <option value="FB">Pensión Completa</option>
                        </select><br><br>
                    </div>
                    <div class="mb-2">
                        <textarea class="form-control" name="comment" id="comment" rows="3">Comentarios...</textarea><br><br>
                    </div>
                    <div class="mt-4 w-25">
                        <div class="mb-2">
                            <input class="form-control" name="tax" id="tax">Impuestos</input>
                        </div>
                        <div class="mb-2">
                            <input class="form-control" name="discount" id="discount">Código de descuento</input>
                        </div>
                        <div class="me-4">
                            <button id="button1" type="button">Calcular total</button><br><br>
                        </div>
                        <div class="">
                            <input class="form-control" type="text" id="total_amount" name="total_amount" label="total_amount">Total</><br><br>
                        </div>
                    </div>
                    <div class="">
                        <button onclick="showPay()">Reservar</button>
                    </div>
                    <div id="show-pay" style="display: none">
                        <div class="form-row2">
                            <label for="card-element">
                                Tarjeta de crédito
                            </label>
                            <div id="card-element">
                            </div>
                            <div id="card-errors" role="alert"></div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button>Pagar</button>
                    </div>
                </form>
                @else
                <a href="{{ url('/register') }}">{{ Lang::get('login.register') }}</a>
                @endif
            </div>
        </div>
    </div>

    @elseif($room->idRoom != 1)
    <div class="">
        <div class="">
            <div class="my-5">
                <div class="">
                    <div class="text-center mb-5">
                        <h3>{{ $room->room_name }}</h3>
                    </div>
                    <ul>
                        <li class="">Habitación doble con baño</li>
                    </ul>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="csslider infinity" id="slider1">
                    <input type="radio" name="slides" checked="checked" id="slides_1" />
                    <input type="radio" name="slides" id="slides_2" />
                    <ul class="obgaleria" id="galeria1">
                        <li><img class="galleryImg" src="{{ Storage::url('media/suit1.jpg') }}"></li>
                        <li><img class="galleryImg" src="{{ Storage::url('media/suit2.jpg') }}"></li>
                    </ul>
                    <div class="arrows">
                        <label for="slides_1"></label>
                        <label for="slides_2"></label>
                        <label class="goto-first" for="slides_1"></label>
                        <label class="goto-last" for="slides_2"></label>
                    </div>
                    <div class="navigation d-none d-lg-block mt-3">
                        <div>
                            <label for="slides_1"><img width="90vw" height="90vh" src="{{ Storage::url('media/suit1.jpg') }}" /></label>
                            <label for="slides_2"><img width="90vw" height="90vh" src="{{ Storage::url('media/suit2.jpg') }}" /></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4" style="border: 1px solid black">
            @if (Auth::user())
            <div class="text-primary">
                <h3>Detalles de la reserva</h3>
            </div>
            <div class="">
                <h4>Habitación doble</h4>
            </div>
            <div class="">
                <p>Día de llegada: {{ $startDate }}, desde las 14:00 pm</p>
            </div>
            <div class="">
                <p>Día de salida: {{ $endDate }}, hasta las 12:00 pm</p>
            </div>

            <form method="POST" action="/showRoom/stripe" id="payment-form">
                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                <input name="idroom" id="idroom" value="{{ $room->idRoom }}" type="hidden" />
                <input name="startDate" id="startDate" value="{{ $startDate }}" type="hidden" />
                <input name="endDate" id="endDate" value="{{ $endDate }}" type="hidden" />
                <div class="mb-2">
                    <br><label for="guests">Número de Adultos</label>
                    <select name="guests" id="guests">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select><br><br>
                </div>
                <div class="mb-2">
                    <br><label for="guestsChildren">Número de Niños</label>
                    <select name="guestsChildren" id="guestsChildren">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select><br><br>
                </div>
                <div class="mb-2">
                    <br><label for="guestsBabies">Número de Bebés</label>
                    <select name="guestsBabies" id="guestsBabies">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select><br><br>
                </div>
                <div class="mb-2">
                    <label for="board">Pensión</label>
                    <select name="board" id="board">
                        <option value="HB">Media Pensión</option>
                        <option value="FB">Pensión Completa</option>
                    </select><br><br>
                </div>
                <div class="mb-2">
                    <textarea class="form-control" name="comment" id="comment" rows="3">Comentarios...</textarea><br><br>
                </div>
                <div class="mt-4 w-25">
                    <div class="mb-2">
                        <input class="form-control" name="tax" id="tax">Impuestos</input>
                    </div>
                    <div class="mb-2">
                        <input class="form-control" name="discount" id="discount">Código de descuento</input>
                    </div>
                    <div class="me-4">
                        <button id="button1" type="button">Calcular total</button><br><br>
                    </div>
                    <div class="">
                        <input class="form-control" type="text" id="total_amount" name="total_amount" label="total_amount">Total</><br><br>
                    </div>
                </div>
                <div class="">
                    <button onclick="showPay()">Reservar</button>
                </div>
                <div id="show-pay" style="display: none">
                    <div class="form-row2">
                        <label for="card-element">
                            Tarjeta de crédito
                        </label>
                        <div id="card-element">
                        </div>
                        <div id="card-errors" role="alert"></div>
                    </div>
                </div>
                <div class="mt-3">
                    <button>Pagar</button>
                </div>
            </form>
            @else
            <a href="{{ url('/register') }}">{{ Lang::get('login.register') }}</a>
            @endif
        </div>
    </div>
    @endif
    @endsection
    </div>
</body>