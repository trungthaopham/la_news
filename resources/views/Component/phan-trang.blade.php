@if ($paginator->hasPages())
    <div class="news_pagination pagination">
        <ul class="news_pagi d-flex">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item pagination__page disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">Trước</span>
                </li>
            @else
                <li class="page-item pagination__page">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">Đầu</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item pagination__page disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item pagination__page active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item pagination__page"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item pagination__page">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Sau</a>
                </li>
            @else
                <li class="page-item pagination__page disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">Cuối</span>
                </li>
            @endif
        </ul>
    </div>
@endif
{{-- <nav class="pagination">
    <span class="pagination__page pagination__page--current">1</span>
    <a href="#" class="pagination__page">2</a>
    <a href="#" class="pagination__page">3</a>
    <a href="#" class="pagination__page">4</a>
    <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-right"></i></a>
  </nav> --}}
