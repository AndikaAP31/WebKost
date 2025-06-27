@props([
    'icon' => 'circle',
    'href' => '#',
    'active' => false,
])

@php
$baseClasses = 'flex items-center px-3 py-2 text-sm rounded-lg transition hover:bg-blue-600';
$activeClass = $active ? 'bg-blue-700 text-white' : 'text-gray-300';
@endphp

<a href="{{ $href }}" class="{{ $baseClasses }} {{ $activeClass }}">
    @switch($icon)
        @case('grid')
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <rect x="3" y="3" width="7" height="7" />
                <rect x="14" y="3" width="7" height="7" />
                <rect x="14" y="14" width="7" height="7" />
                <rect x="3" y="14" width="7" height="7" />
            </svg>
            @break
        @case('book')
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                <path d="M4 4v15h16V4H4z" />
            </svg>
            @break
        @case('users')
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                <circle cx="9" cy="7" r="4" />
            </svg>
            @break
        @case('check-square')
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <polyline points="9 11 12 14 22 4" />
                <path d="M21 12v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
            </svg>
            @break
        @case('refresh-cw')
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <polyline points="23 4 23 10 17 10" />
                <polyline points="1 20 1 14 7 14" />
                <path d="M3.51 9a9 9 0 0 1 14.13-3.36L23 10" />
                <path d="M20.49 15a9 9 0 0 1-14.13 3.36L1 14" />
            </svg>
            @break
        @case('file-text')
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                <polyline points="14 2 14 8 20 8" />
                <line x1="16" y1="13" x2="8" y2="13" />
                <line x1="16" y1="17" x2="8" y2="17" />
                <line x1="10" y1="9" x2="8" y2="9" />
            </svg>
            @break
        @case('archive')
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24">
                <rect x="3" y="4" width="18" height="4" />
                <path d="M3 10h18v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V10z" />
                <line x1="9" y1="14" x2="15" y2="14" />
            </svg>
            @break
    @endswitch
    <span class="truncate">{{ $slot }}</span>
</a>
