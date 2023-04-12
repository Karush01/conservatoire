@extends('layouts.app')

@section('content')

    <section class="slider">
        <div class="container">
            <div class="slider__inner">
                <p class="slider-title">Conservatoire</p>
                <p class="slider-title">Serge Rachmaninoff</p>
                <p class="slider-description">100 ans d’histoire et d’enseignement et de découvertes musicales</p>
            </div>
        </div>
    </section>

    <section class="agenda">
        <div class="container">
            <div class="agenda__inner">
                <div class="agenda-description">
                    <h1>Agenda</h1>
                    <p>Une expérience riche et diversifiée dans la mise en œuvre des objectifs planifiés joue un rôle
                        important dans l'élaboration du modèle de développement.</p>
                </div>
                <div class="swiper AgendaSwiper">
                    <div class="swiper-wrapper">
                        @foreach($agendas as $agenda)
                            <div class="swiper-slide">
                                <a href="{{route('agenda-single', ['id' =>$agenda->id])}}" class="agenda-item">
                                    <div class="agenda-image">
                                        <img src="{{ URL::to('/storage/'.$agenda->image) }} " alt="">
                                    </div>
                                    <div class="agenda-when">
                                        <div class="agenda-item-data">10</div>
                                        <div class="agenda-item-month">Décembre</div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-navone">
                        <div class="swiper-agenda-button-next"></div>
                        <div class="swiper-agenda-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="actualites">
        <div class="container">
            <div class="actualites__inner">
                <div class="actualites-description">
                    <h1>Actualites</h1>
                </div>

                <div class="swiper ActualitesSwiper">
                    <div class="swiper-wrapper">

                        @foreach($topicals as $topical)
                            <div class="swiper-slide">
                                <a href="{{route('topical-single', ['id' =>$topical->id])}}" class="actualites-item">
                                    <div class="actualites-image">
                                        <img src="{{ URL::to('/storage/'.$topical->image) }} " alt="">
                                    </div>
                                    <div class="actualites-title">{{$topical->title}}</div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-navtwo">
                        <div class="swiper-actualites-button-next"></div>
                        <div class="swiper-actualites-button-prev"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

