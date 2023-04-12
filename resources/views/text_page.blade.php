@extends('layouts.app')

@section('content')
    <section class="page">
        <div class="container">
            <div class="page__inner">
                <div class="page-description">
                    <h1>{{$page_data->title}}</h1>
                </div>
                <div class="page-content">

                    <div class="page-image">
                        <a class="example-image-link"
                           href="{{ URL::to('/storage/'.$page_data->image) }}"
                           data-lightbox="example-set">
                            <img class="example-image" src="{{ URL::to('/storage/'.$page_data->image) }} " alt="">
                        </a>
                    </div>
                    <div class="page-text">
                        {!! $page_data->body !!}
                    </div>

                </div>


            </div>
        </div>
        </div>
    </section>
@endsection

