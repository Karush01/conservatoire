@extends('layouts.app')

@section('content')
    <section class="page">
        <div class="container">
            <div class="page__inner">
                <div class="page-description">
                    <h1>{{$agenda->title}}</h1>
                </div>
                <div class="page-content">
                    <div class="concert">
                        <div class="agenda-image">
                            <img src="{{ URL::to('/storage/'.$agenda->image) }} " alt="">
                        </div>
                        <div class="agenda-description">
                            {!! $agenda->body !!}
                             <a href="#">Faire une réservation</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

