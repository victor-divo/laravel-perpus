@if ($paginator->hasPages())
  <p>
    {{-- Prev page link --}}
    @if ($paginator->onFirstPage())
      <span>@lang('pagination.previous')</span>
    @else
      <a href="{{ $paginator->previousPageUrl() }}">@lang('pagination.previous')</a>
    @endif

    {{-- Pagination element --}}
    @foreach ($elements as $element)
      {{-- Three dots separator --}}
      @if (is_string($element))
        <span>{{ $element }} </span>
      @endif

      {{-- Array of Links --}}
      @if (is_array($element))
        @foreach ($element as $page => $url)
          @if ($page == $paginator->currentPage())
            <span>{{ $page }} </span>
          @else
            <a href="{{ $url }}">{{ $page }}</a>
          @endif
        @endforeach
      @endif
    @endforeach

    {{-- Next page link --}}
    @if ($paginator->hasMorePages())
      <a href="{{ $paginator->nextPageUrl() }}">@lang('pagination.next')</a>
    @else
      <span>@lang('pagination.next')</span>
    @endif
  </p>
@endif
