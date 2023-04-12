@extends('layouts.app')

@section('content')
    <section class="page">
        <div class="container">
            <div class="page__inner">
                <div class="page-description">
                    <h1>Nos professeurs</h1>
                </div>
                <div class="page-content">
                    <div class="filtre">
                        <select  name="tool-type" id="tool_type">
                            <option disabled selected>Choisissez un outil</option>
                            @foreach($all_categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                        <select  name="artist" id="artist">
                            <option disabled selected value="0">Choisissez un artiste</option>
                        </select>
                    </div>
                    <div class="teachers-list">
                        @foreach($teachers as $teacher)
                            <div class="artist-information flex-md-row flex-column">
                                <div class="artist-photo">
                                    <img src="{{ URL::to('/storage/'.$teacher->image) }} " alt="">
                                </div>
                                <div class="artist-biography">
                                    <h2>{{$teacher->title}}</h2>
                                    {!! $teacher->body !!}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

