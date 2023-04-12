@extends('layouts.app')

@section('content')
    <section class="page">
        <div class="container">
            <div class="page__inner">
                <div class="page-description">
                    <h1>Histoire</h1>
                </div>
                <div class="page-content">
                    @foreach($histories as $history)
                        <div class="story">
                            <h2>{{$history->title}}</h2>
                            <div class="story-information">
                                <div class="story-image">
                                    <img  src="{{ URL::to('/storage/'.$history->image) }} " alt="">
                                    <span>Image : Conservatoire impérial de St Petersbourg</span>
                                </div>
                                <div class="story-text">
                                    {!! $history->body !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

