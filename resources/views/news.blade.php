@extends('layouts.app')

@section('content')
    <section class="page">
        <div class="container">
            <div class="page__inner">
                <div class="page-description">
                    <h1>Actualité du Conservatoire</h1>
                </div>
                <div class="page-content">
                    <div class="filter-dates">
                        <div class="dates">
                            @foreach($categories_by_date as $cat)
                                <a href="{{route('news-by-cat', ['id' =>$cat->id])}}">{{$cat->name}}</a>
                            @endforeach
                            {{-- <a class="activedate" href="#">2023</a>--}}

                        </div>
                        <div class="archivelink"><a href="#">Nouvelles archives</a></div>
                    </div>
                    <div class="actualites-list">
                        @foreach($news as $actual_p)
                        <a href="{{route('news-single', ['id' =>$actual_p->id])}}" class="actualites-item">
                            <div class="actualites-image">
                                 <img  src="{{ URL::to('/storage/'.$actual_p->image) }} " alt="">
                            </div>
                            <div class="actualites-title">{{$actual_p->title}}</div>
                        </a>
                        @endforeach

                    </div>
                    {{ $news->links('pagination.agenda_pagination') }}
                </div>
            </div>
        </div>
    </section>
@endsection

