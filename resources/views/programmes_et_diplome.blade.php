@extends('layouts.app')

@section('content')

    <section class="page">
        <div class="container">
            <div class="page__inner">
                <div class="page-description">
                    <h1>Programmes et diplôme</h1>
                </div>
                <div class="page-content">
                    @foreach($programs_and_diplomas as $program_and_diplom)
                        <div class="program">
                            <div class="program-image">
                                <img  src="{{ URL::to('/storage/'.$program_and_diplom->image) }} " alt="">
                            </div>
                            <div class="program-information">
                                <h3>{{$program_and_diplom->title}}</h3>
                                {!! $program_and_diplom->body !!}
                                <a href="{{route('programs-and-diplomas-single', ['id' =>$program_and_diplom->id])}}">Suite</a>
                            </div>
                        </div>
                    @endforeach
                        {{ $programs_and_diplomas->links('pagination.agenda_pagination') }}
                </div>
            </div>
        </div>
    </section>
@endsection

