@extends('layouts.app')

@section('content')
    <section class="page">
        <div class="container">
            <div class="page__inner">
                <div class="page-description">
                    <h1>Instruments</h1>
                </div>
                <div class="page-content">

                    <div class="instruments-list">
                        @foreach($instruments as $instrument)
                            <a href="{{route('instrument-single', ['slug' =>$instrument->slug])}}" class="instruments-item">
                                <div class="instruments-image">
                                    <img  src="{{ URL::to('/storage/'.$instrument->image) }} " alt="">
                                </div>
                                <div class="instruments-title">{{$instrument->title}}</div>
                            </a>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

