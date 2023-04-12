@if ($paginator->hasPages())

    <div class="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a href="#" class="disabled navarrowleft" style="pointer-events: none"></a>
        @else
             <a href="{{ $paginator->previousPageUrl() }}" class="disabled navarrowleft"></a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class=" disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
{{--                        <li class="555 active"><span>{{ $page }}</span></li>--}}
                        <a href="#" class="active">{{ $page }}</a>
                    @else
{{--                        <li class="555"><a href="{{ $url }}">{{ $page }}</a></li>--}}
                        <a href="{{ $url }}" class="active">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="navarrowright"></a>
    {{--            <li class="555"><a href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>--}}
        @else
            <a href="" class="navarrowright" style="pointer-events: none"></a>
        @endif


    </div>


@endif
