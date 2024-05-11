@if ($paginator->hasPages())
<nav aria-label="Page navigation example" style="margin-top: 10px;float: right;">
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li class="disabled page-item" aria-disabled="true" aria-label="@lang('pagination.previous')">
            <a class="page-link" href="#">Trước</a>
        </li>
        @else
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
        </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
        <li class="disabled" aria-disabled="true"><a class="page-link" href="#">{{ $element }}</a></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="active page-item" aria-current="page"><a class="page-link" href="#">{{ $page }}</a></li>
        @else
        <li class="page-item"><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
        @endif
        @endforeach
        @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="page-link" aria-label="@lang('pagination.next')">&rsaquo;</a>
        </li>
        @else
        <li class="disabled page-item" aria-disabled="true" aria-label="@lang('pagination.next')">
            <a class="page-link" href="#">Tiếp</a>
        </li>
        @endif
    </ul>
    <nav>
        @endif