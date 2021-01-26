@if ($paginator->hasPages())
<nav class="pagination is-centered is-small" role="navigation">
    @if ($paginator->onFirstPage())
    <a class="pagination-previous" disabled>Anterior</a>
    @else
    <a class="pagination-previous" href="{{$paginator->previousPageUrl()}}">
        Anterior
    </a>
    @endif

    @if ($paginator->hasMorePages())
    <a class="pagination-next" href="{{ $paginator->nextPageUrl() }}">
        Próximo
    </a>
    @else
    <a class="pagination-next" disabled>Próximo</a>
    @endif

    <ul class="pagination-list">
    @foreach ($elements as $element)
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <li><a class="pagination-link is-current">{{$page}}</a></li>
                @else
                <li><a class="pagination-link" href="{{ $url }}">{{$page}}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach
    </ul>
</nav>
@endif
