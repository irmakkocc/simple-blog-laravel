<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1">Önceki</a>
        </li>
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li class="page-item {{ $paginator->currentPage() == $i ? 'active' : '' }}">
            <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
        </li>
        @endfor
        <li class="page-item {{ $paginator->onLastPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" tabindex="-1">Sonraki</a>
        </li>
    </ul>
</nav>