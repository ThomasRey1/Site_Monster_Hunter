@if ($paginator->hasPages())
<nav role="navigation" aria-label="{{ __('Pagination Navigation') }}">
    <div class="flex justify-between flex-1 sm:hidden">
        @if ($paginator->onFirstPage())
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-[#9E8D74] bg-[#52493C] border border-black cursor-default leading-5 rounded-md">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-[#9E8D74] bg-[#52493C] border border-black leading-5 rounded-md hover:text-black active:bg-[#1A1713] active:text-[#9E8D74] transition ease-in-out duration-150 dark:bg-black dark:text-[#766343] dark:hover:text-[#9E8D74] dark:active:bg-[#9E8D74] dark:active:text-[#52493C]">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-[#9E8D74] bg-[#52493C] border border-black leading-5 rounded-md hover:text-black active:bg-[#1A1713] active:text-[#9E8D74] transition ease-in-out duration-150 dark:bg-black dark:text-[#766343] dark:hover:text-[#9E8D74] dark:active:bg-[#9E8D74] dark:active:text-[#52493C]">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-[#9E8D74] bg-[#52493C] border border-black cursor-default leading-5 rounded-md">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </div>

    <div>
        <span class="relative z-0 inline-flex shadow-sm rounded-md">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                    <span class="duration-[0.5s] relative inline-flex items-center px-2 py-2 text-sm font-medium text-[#9E8D74] bg-[#52493C] border border-black cursor-default rounded-l-md leading-5 dark:bg-black dark:text-[#766343] dark:hover:text-[#9E8D74] dark:active:bg-[#9E8D74] dark:active:text-[#52493C]" aria-hidden="true">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="duration-[0.5s] relative inline-flex items-center px-2 py-2 text-sm font-medium text-[#9E8D74] bg-[#52493C] border border-black rounded-l-md leading-5 hover:text-black focus:z-10 active:bg-[#1A1713] active:text-[#9E8D74] transition ease-in-out duration-150 dark:bg-black dark:text-[#766343] dark:hover:text-[#9E8D74] dark:active:bg-[#9E8D74] dark:active:text-[#52493C]" aria-label="{{ __('pagination.previous') }}">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span aria-disabled="true">
                        <span class="duration-[0.5s] relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-[#9E8D74] bg-[#52493C] border border-black cursor-default leading-5">{{ $element }}</span>
                    </span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span aria-current="page">
                                <span class="duration-[0.5s] relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium bg-black text-[#766343] border border-black cursor-default leading-5 dark:bg-[#52493C] dark:text-[#9E8D74]">{{ $page }}</span>
                            </span>
                            @else
                            <a href="{{ $url }}" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-[#9E8D74] bg-[#52493C] border border-black leading-5 hover:text-black focus:z-10 active:bg-[#1A1713] active:text-[#9E8D74] transition ease-in-out duration-150 dark:bg-black dark:text-[#766343] dark:hover:text-[#9E8D74] dark:active:bg-[#9E8D74] dark:active:text-[#52493C]" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="duration-[0.5s] relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-[#9E8D74] bg-[#52493C] border border-black rounded-r-md leading-5 hover:text-black focus:z-10 active:bg-[#1A1713] active:text-[#9E8D74] transition ease-in-out duration-150 dark:bg-black dark:text-[#766343] dark:hover:text-[#9E8D74] dark:active:bg-[#9E8D74] dark:active:text-[#52493C]" aria-label="{{ __('pagination.next') }}">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            @else
                <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                    <span class="duration-[0.5s] relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-[#9E8D74] bg-[#52493C] border border-black cursor-default rounded-r-md leading-5 dark:bg-black dark:text-[#766343] dark:hover:text-[#9E8D74] dark:active:bg-[#9E8D74] dark:active:text-[#52493C]" aria-hidden="true">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </span>
            @endif
        </span>
    </div>
    </div>
</nav>
@endif