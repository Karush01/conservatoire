@extends('layouts.app')

@section('content')
    <section class="page">
        <div class="container">
            <div class="page__inner">
                <div class="page-description">
                    <h1>Concerts</h1>
                </div>
                <div class="page-content">

                    <div class="concerts-list">
                        @foreach($agendas as $agenda)
                            <a href="{{route('agenda-single', ['id' =>$agenda->id])}}" class="agenda-item">
                            <div class="agenda-image">
                                <img src="{{ URL::to('/storage/'.$agenda->image) }} " alt="">
                            </div>
                            <div class="agenda-title">

                                <div class="agenda-when">
                                    <div class="agenda-item-data">10</div>
                                    <div class="agenda-item-month">Décembre</div>
                                </div>

                                <p>{{$agenda->title}}</p>

                            </div>
                        </a>
                        @endforeach
                    </div>

                    {{ $agendas->links('pagination.agenda_pagination') }}



                </div>
            </div>
        </div>
    </section>
@endsection

