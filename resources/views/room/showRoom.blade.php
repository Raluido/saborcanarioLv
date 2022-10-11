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
        <div class="d-flex justify-conten-center">
            <div class="d-flex">
                <div class="d-flex justify-content-center mb-5 mt-5">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ Storage::url('/media/suit1.jpg') }}" width="400" height="500" alt="First slide">
                            </div>
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ Storage::url('/media/suit2.jpg') }}" width="400" height="500" alt="Second slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="ml-4">
                    <div class="text-center">
                        <p class="">Amplia habitación con vistas a la calle</p>
                    </div>
                </div>
                <div class="d-flex w-75">
                    <div class="w-100" style="border: 1px solid black">
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

                        <form method="POST" action="/showRoom/{idRoom}" id="payment-form">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                            <input name="idroom" id="idroom" value="{{ $room->idRoom }}" type="hidden" />
                            <input name="startDate" id="startDate" value="{{ $startDate }}" type="hidden" />
                            <input name="endDate" id="endDate" value="{{ $endDate }}" type="hidden" />

                            <div class="mb-2">
                                <br><label for="guests">Número de Huéspedes</label>
                                <select name="guests" id="guests">
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
                            <div class="mt-4 d-flex">
                                <div class="mr-3">
                                    <label for="total" name="total">Total</label>
                                </div>
                                <div class="">
                                    <button id="button1" type="button">Calcular total</button><br><br>
                                </div>
                                <div class="">
                                    <input type="text" id="total_amount" name="total_amount" label="total_amount" value="" /><br><br>
                                </div>
                            </div>
                            <button onclick="showPay()">Reservar</button>
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
                            <div class="">
                                <button>Pagar</button>
                            </div>
                        </form>
                        @else
                        <a href="{{ url('/register') }}">{{ Lang::get('login.register') }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        @elseif($room->idRoom != 1)
        <div class="d-flex justify-content-center">
            <div class="d-flex">
                <div class="d-flex justify-content-center mb-5 mt-5">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="{{ Storage::url('/media/habitacionDoble1.jpg') }}" width="400" height="500">
                            </div>
                            <div class="carousel-item active">
                                <img class="img-fluid" src="{{ Storage::url('/media/habitacionDoble.jpg') }}" width="400" height="500">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="d-flex w-75">
                    <div class="w-100 p-4" style="border: 1px solid black">
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

                        <form method="POST" action="/showRoom/{idRoom}" id="payment-form">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                            <input name="idroom" id="idroom" value="{{ $room->idRoom }}" type="hidden" />
                            <input name="startDate" id="startDate" value="{{ $startDate }}" type="hidden" />
                            <input name="endDate" id="endDate" value="{{ $endDate }}" type="hidden" />
                            <div class="mb-2">
                                <br><label for="guests">Número de Huéspedes</label>
                                <select name="guests" id="guests">
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
                            <div class="mt-4">
                                <div class="">
                                    <button id="button1" type="button">Calcular total</button><br><br>
                                </div>
                                <div class="d-flex">
                                    <div class="">
                                        <label for="total" name="total">Total</label>
                                    </div>
                                    <div class="ms-3">
                                        <input type="text" id="total_amount" name="total_amount" label="total_amount" value="" /><br><br>
                                    </div>
                                </div>
                            </div>
                            <button onclick="showPay()">Reservar</button>
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
        </div>
        @endif
        @endsection
    </div>
</body>