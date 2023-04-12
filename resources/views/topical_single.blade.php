@extends('layouts.app')

@section('content')
    <section class="page">
        <div class="container">
            <div class="page__inner">
                <div class="page-description">
                    <h1>{{$topical->title}}</h1>
                </div>
                <div class="page-content">

                    <div class="page-image">
                        <a class="example-image-link"
                           href="{{ URL::to('/storage/'.$topical->image) }}"
                           data-lightbox="example-set">
                            <img class="example-image" src="{{ URL::to('/storage/'.$topical->image) }} " alt="">
                        </a>
                    </div>
                    <div class="page-text">
                        {!! $topical->body !!}
                    </div>

                </div>


            </div>
        </div>
        </div>
    </section>
@endsection

