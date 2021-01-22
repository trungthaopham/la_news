@if ($paginator->hasPages())
    <div class="ui pagination menu" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="icon item disabled pagination__page" aria-disabled="true" aria-label="@lang('pagination.previous')"> <i class="fa fa-angle-left"></i> </a>
        @else
            <a class="icon item pagination__page" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"> <i class="fa fa-angle-left"></i> </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a class="icon item disabled pagination__page" aria-disabled="true">{{ $element }}</a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="item pagination__page active" href="{{ $url }}" aria-current="page">{{ $page }}</a>
                    @else
                        <a class="item pagination__page" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="icon pagination__page item" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"> <i class="fa fa-angle-right"></i> </a>
        @else
            <a class="icon pagination__page item disabled" aria-disabled="true" aria-label="@lang('pagination.next')"> <i class="fa fa-angle-right"></i> </a>
        @endif
    </div>
@endif
