@extends('layouts.master')
@section('mainDiv')

<body>
    <div class="container-fluid main-bg p-0">
        @endsection
        @section('content')
        <div class="text-center text-white mainTitle">
            <h1>HOTEL RURAL OROTAVA</h1>
            <div class="stars text-center">
            </div>
        </div>
        <div class="container">
            <form method="POST" action="/room">
                <div class="d-flex justify-content-center mt-5 fs-4">
                    <div class="row w-75">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-6 text-center d-flex align-items-center">
                            <div class="">
                                <input class="form-control" name="daterange" id="daterange" type="daterange" />
                                <input name="start_Date" id="start_Date" type="hidden" />
                                <input name="end_Date" id="end_Date" type="hidden" />
                            </div>
                        </div>
                        <div class="col-12 mt-4 mt-md-0 col-xl-4 col-lg-4 col-md-4 col-sm-6 d-flex align-items-center">
                            <div class="">
                                <select class="form-control" name="guests" id="guests">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="ms-3 text-center text-white">
                                <label for="">Adultos</label>
                            </div>
                        </div>
                        <div class="col-12 mt-5 mt-md-0 col-xl-4 col-lg-4 col-md-4 col-sm-6 d-flex align-items-center justify-content-center">
                            <button class="btn btn-primary btn-lg">Consultar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container-fluid">
        <section class="">
            <div class="" style="margin-top: 10vh;">
                <div class="d-flex justify-content-center">
                    <div class="d-inline-block text-primary">
                        <h2 class="load-hidden" id="transHotelTitle">La casa</h2>
                        <hr class="text-center mx-auto w-75">
                    </div>
                </div>
                <div class="description w-75 mx-auto my-5">
                    <div class="">
                        <p class="load-hidden  text-center" id="transHotel">El hotel se encuentra en una casa
                            del siglo
                            XVII, situada en el casco historico de la Villa de La Orotava. En su interior
                            contiene dos patios con balconada en dónde poder disfrutar de nuestra gastronomía. En la
                            segunda
                            planta disponemos de 8 habitaciones con decoración de la época y techos artesados de madera de
                            tea.
                    </div>
                    <!-- <div class="showMore text-center"><a class="text-decoration-none text-primary">Saber más</a></div> -->
                </div>
            </div>
            <div class="">
                <div class="row load-hidden">
                    <div class="col-lg-12 p-0">
                        <div class="rescarousel" data-items="2,4,5,6" data-slide="1">
                            <div class="rescarousel-inner">
                                <div class="item">
                                    <div class="innerItem">
                                        <div class="imageCarousel">
                                            <img src="{{ Storage::url('/media/callelacarrera.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="innerItem">
                                        <div class="imageCarousel">
                                            <img src="{{ Storage::url('/media/corredor.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="innerItem">
                                        <div class="imageCarousel">
                                            <img src="{{ Storage::url('/media/corredor1.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="innerItem">
                                        <div class="imageCarousel">
                                            <img src="{{ Storage::url('/media/biblioteca.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="innerItem">
                                        <div class="imageCarousel">
                                            <img src="{{ Storage::url('/media/restaurante.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="innerItem">
                                        <div class="imageCarousel">
                                            <img src="{{ Storage::url('/media/laorotava.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="innerItem">
                                        <div class="imageCarousel">
                                            <img src="{{ Storage::url('/media/teide.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-default leftlst">
                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                            </button>
                            <button class="btn btn-default rightlst">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="row" style="margin-top: 12vh;">
            <div class="col-12 col-xl-6 col-lg-6">
                <div class="d-flex justify-content-center">
                    <div class="d-inline-block text-primary">
                        <h2 class="load-hidden " id="transValleyTitle">El valle</h2>
                        <hr class="text-center mx-auto w-75">
                    </div>
                </div>
                <div class="mx-auto my-5 w-75 content hideContent2">
                    <p class="load-hidden " id="transValley">La Orotava es un municipio perteneciente a la
                        provincia de Santa Cruz de Tenerife, en la isla de Tenerife (Canarias, España). La capital
                        municipal está localizada en la Villa de La Orotava, situada a unos 360 m s. n. m.. <br>
                        El casco histórico de La Orotava fue declarado Conjunto Histórico Artístico Nacional1​ en 1976 y
                        se encuentra incluido en el Inventario de Protección del Patrimonio Cultural Europeo como
                        Conjunto Monumental.
                        <br>Además, es destacable que gran parte del parque nacional del Teide (declarado Patrimonio de
                        la
                        Humanidad en 2007) se encuentra dentro de su término municipal. La Orotava es también el
                        municipio más alto de España y con mayor desnivel, su término municipal llega desde el nivel del
                        mar, hasta los 3.718 metros del pico Teide (el pico más alto de España).<br> Junto con los
                        municipios vecinos de Los Realejos y Puerto de la Cruz forma el Área metropolitana del Valle de
                        La Orotava con 108.721 habitantes (2019).​
                    </p>
                </div>
                <div class="showMore2 text-center"><a class="text-decoration-none text-primary">Saber más</a></div>
            </div>
            <div class="col-12 col-xl-6 col-lg-6 load-hidden" style="margin-top:13vh">
                <div class="ratio ratio-16x9">
                    <iframe width="380" height="280" src="https://www.youtube.com/embed/8k4Cobts1sU" title="YouTube video player" fram="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <section class="row load-hidden" style="margin-top: 12vh;">
            <div class="col-12 col-xl-12 col-lg-12">
                <div class="d-flex justify-content-center">
                    <div class="d-inline-block text-primary">
                        <h2 class="load-hidden " id="transRoomsTitle">Habitaciones</h2>
                        <hr class="text-center mx-auto w-75">
                    </div>
                </div>
                <div class="my-5 mx-auto w-75">
                    <p class="load-hidden text-center" id="transRooms">Disponemos de 8 habitaciones que
                        pueden hospedar
                        de 2 a 4 personas.
                    </p>
                </div>
            </div>
            <div class="row g-0 col-12 col-xl-12 col-xl-12 load-hidden ">
                <div class="textOverImg col-12 col-xl-6 col-lg-6">
                    <img src="{{ Storage::url('/media/hab_4.jpg') }}" class="img-fluid cover" alt="habitación doble">
                </div>
                <div class="textOverImg col-12 col-xl-6 col-lg-6">
                    <img src="{{ Storage::url('/media/hab_5.jpg') }}" class="img-fluid cover" alt="suit">
                </div>
            </div>
        </section>
        <section class="load-hidden">
            <div class="row" style="margin-top: 10vh;">
                <div class="col-12 col-xl-12">
                    <div class="d-flex justify-content-center">
                        <div class="d-inline-block text-primary">
                            <h2 class="load-hidden " id="transPublicTitle">Zonas Comunes</h2>
                            <hr class="text-center mx-auto w-75">
                        </div>
                    </div>
                    <div class="my-5 mx-auto w-75">
                        <p class="load-hidden  text-center" id="transPublic">Nada más subir las escaleras
                            llegamos a un luminoso corredor con ventanales al patio. Este conecta con las diferentes
                            estancias del hotel,
                            así como del salón biblioteca, decorado con utensilios guanches y castellanos de la época de la
                            conquista dónde poder disfrutar de un lugar de lectura
                            y relax. El desayuno se sirve en la cocina original de la casa, un momento en el cuál
                            podrás transportarte a épocas pasadas. </p>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <img src="{{ Storage::url('/media/escalera.jpg') }}" class="img-fluid cover" alt="habitación doble">
                </div>
                <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <img src="{{ Storage::url('/media/corredor1.jpg') }}" class="img-fluid cover" alt="suit">
                </div>
                <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <img src="{{ Storage::url('/media/pasilloFix.jpg') }}" class="img-fluid cover" alt="suit">
                </div>
            </div>
        </section>
        <section class="w-100 mx-auto text-center text-primary load-hidden" style="margin-top: 15vh;">
            <div class="d-flex justify-content-center">
                <div class="d-inline-block text-primary">
                    <h2 class="load-hidden " id="transHowToGet">Cómo llegar</h2>
                    <hr class="text-center mx-auto w-75">
                </div>
            </div>
            <div class="my-5 p-3">
                <div class="ratio ratio-4x3 mx-auto" style="max-width: 50%; min-width: 70%;">
                    <iframe class="responsive-iframe load-hidden " src="https://www.google.com/maps/d/embed?mid=1CfPjuzypOtY3C585huizNXOnMww&hl=es"></iframe>
                </div>
            </div>
        </section>
        <section class="pt-4 pb-4 d-flex align-items-center justify-content-center text-white text-center border load-hidden" style="margin-top: 10vh; background-color:coral">
            <div class="">
                <h3>Our stay was amazing. We will be returning again.</h3>
                <div class="d-flex justify-content-center mt-4">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <div class="">
                        <img src="{{ Storage::url('media/client.png') }}" alt="">
                    </div>
                    <div class="d-flex flex-column pt-3 ps-3 ">
                        <div class="">
                            <h5>Amy Jhonson</h5>
                        </div>
                        <div class="">
                            <p>Adventurer</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="row mt-5 load-hidden">
            <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="d-flex flex-column justify-content-center text-center h-100">
                    <h4 id="transRateTitle">Estancia 5 estrellas ****</h4>
                    <p id="transRate">Estancia elegida por los usuarios de Tripadvisor en 2020.</p>
                </div>
            </div>
            <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 text-center">
                <img src="{{ Storage::url('/media/tripAdvisor.png') }}" width="240" heigth="120">
            </div>
        </section>
        <section class="load-hidden">
            <div class="row" style="margin-top: 5vh;">
                <div class="col-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="d-flex justify-content-center">
                        <div class="d-inline-block text-primary">
                            <h2 id="transDatesTitle">Fechas señaladas</h2>
                            <hr class="text-center mx-auto w-75">
                        </div>
                    </div>
                    <div class="my-5 w-75 mx-auto text-center">
                        <p id="transDates">Para fechas especiales, consúltamos para conocer nuestras tarifas.</p>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="">
                        <img src="{{ Storage::url('/media/navidad.jpg') }}" width="100%" height="auto">
                    </div>
                    <div class="keyDates p-3">
                        <h4 class="text-primary" id="transSpecial1Title">Noche buena</h4>
                        <p id="transSpecial1">Pasa una noche de ensueño llena de tranquilidad y magia con nosotros.</p>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="">
                        <img src="{{ Storage::url('/media/findeaño.jpg') }}" width="100%" height="auto">
                    </div>
                    <div class="keyDates p-3">
                        <h4 class="text-primary" id="transSpecial2Title">Fin de año</h4>
                        <p id="transSpecial2">Disfruta de una cena especial en nuestro restaurante, brinda con nosotros y
                            disfruta de una
                            noche especial.</p>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="">
                        <img src="{{ Storage::url('/media/alfombras2.jpg') }}" width="100%" height="auto">
                    </div>
                    <div class="keyDates p-3">
                        <h4 class="text-primary" id="transSpecial3Title">Fiestas del Corpus Christi</h4>
                        <p id="transSpecial3">Desde el jueves al domingo disfrutarás de 3 noches de eventos en donde se
                            darán lugar
                            muestras culturales propias del pueblo.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-5 load-hidden">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/JxR_SPj4BEg?controls=0" title="YouTube video player" fram="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>
        <section class="pt-5 pb-5 load-hidden">
            <div class="d-flex justify-content-center">
                <div class="d-inline-block text-primary">
                    <h2 id="transDoubs">¿Dudas?</h2>
                    <hr class="text-center mx-auto w-75">
                </div>
            </div>
            <form action="sendHotel.php" method="post">
                <div class="doubsForm row mt-5 mx-auto">
                    <div class="col-12 col-xl-3 col-lg-3 col-md-12 col-sm-12 mb-4">
                        <input class="form-control mx-auto" for="name" name="name" type="text" placeholder="Nombre">
                    </div>
                    <div class="col-12 col-xl-3 col-lg-3 col-md-12 col-sm-12 mb-4">
                        <input class="form-control mx-auto" for="email" name="email" type="email" placeholder="Email">
                    </div>
                    <div class="col-12 col-xl-3 col-lg-3 col-md-12 col-sm-12 mb-4">
                        <input class="form-control mx-auto" for="phone" name="phone" type="phone" placeholder="Teléfono">
                    </div>
                    <div class="col-12 col-xl-3 col-lg-3 col-md-12 col-sm-12 mb-4">
                        <textarea class="form-control" name="comments" id="transDoubs1">Comentarios</textarea>
                    </div>
                    <div class="">
                        <button class="form-control mx-auto" type="submit" id="transDoubs2" style="width: 140px;">Enviar</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
</body>
@endsection
@section('js')
<script type="text/javascript" src="{{ asset('/js/showMore2.js') }}"></script>
@endsection