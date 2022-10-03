@extends('layouts.master')
@section('mainDiv') {{-- style="border: 1px solid black" --}}

    <body>
        <div class="container-fluid main-bg p-0">
        @endsection
        @section('content')
            <div class="text-center text-white mt-5">
                <h2>HOTEL RURAL OROTAVA</h2>
                <div class="stars text-center">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            <div class="mx-auto mt-5 text-white" style="width: 600px;">
                <form method="POST" action="/room">
                    <div class="row">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <div class="rangeInput col-12 col-xl-4 col-lg-4 col-md-4 col-sm-6 text-center">
                            <div class="ml-4">
                                <label for="disponibilidad">Disponibilidad</label>
                            </div>
                            <div class="">
                                <input class="form-control" name="daterange" id="daterange" type="daterange" />
                                <input name="start_Date" id="start_Date" type="hidden" />
                                <input name="end_Date" id="end_Date" type="hidden" />
                            </div>
                        </div>
                        <div class="guestInput col-12 col-xl-4 col-lg-4 col-md-4 col-sm-6">
                            <div class="text-center">
                                <label for="">Adultos</label>
                            </div>
                            <div class="">
                                <select class="form-control" name="guests" id="guests">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select><br><br>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-6 d-flex align-items-center justify-content-center">
                            <button class="btn btn-primary btn-lg">Consultar</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
        <div class="info mt-5 mb-5">
            <div class="w-100">
                <div class="w-50 mx-auto text-center text-primary">
                    <h2>El hotel</h2>
                    <hr>
                </div>
                <div class="w-75 mx-auto mt-5 mb-5">
                    <p class="">Con una hermosa decoración original, este encantador hotel está
                        situado en el centro de la
                        villa más antigua de Orotava, rodeado de paisajes montañosos. <span><a href="#">Saber más</a></span>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 p-0">
                        <div class="rescarousel" data-items="2,4,5,6" data-slide="1">
                            <div class="rescarousel-inner">
                                <div class="item">
                                    <div class="innerItem">
                                        <div class="imageCarousel">
                                            <img src="{{ Storage::url('/media/' . 'callelacarrera.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="innerItem">
                                        <div class="imageCarousel">
                                            <img src="{{ Storage::url('/media/' . 'corredor.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="innerItem">
                                        <div class="imageCarousel">
                                            <img src="{{ Storage::url('/media/' . 'suit2.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="innerItem">
                                        <div class="imageCarousel">
                                            <img src="{{ Storage::url('/media/' . 'suit3.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="innerItem">
                                        <div class="imageCarousel">
                                            <img src="{{ Storage::url('/media/' . 'restaurante.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="innerItem">
                                        <div class="imageCarousel">
                                            <img src="{{ Storage::url('/media/' . 'suit4.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="innerItem">
                                        <div class="imageCarousel">
                                            <img src="{{ Storage::url('/media/' . 'teide.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-default leftlst" style="margin-top: 100px;">
                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-default rightlst" style="margin-top: 100px;">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 text-center w-50">
                        <h2 class="text-primary mb-4">El valle</h2>
                        <p>Coranado por el pico más alto de España, el volcán Teide mide 3718 metros de altura. En éste se
                            encuentran representados 3 municipios como son, de este a oeste, La Orotava, El Puerto de la
                            Cruz y Los Realejos.<br>
                            El primero, en los primeros años tras la conquista de las islas, fue es segundo en importancia
                            tras el de San Cristobal de La Laguna (antigua capital de la isla). Actualmente la actual
                            capital, el anterior nombrado y otros municipios eminentemente turísticos, tienen un mayor peso
                            si comparamos en términos monetarios.</p>
                    </div>
                    <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 text-center w-50">
                        <iframe width="540" height="304" src="https://www.youtube.com/embed/8k4Cobts1sU"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            @endsection
        </div>
</body>
