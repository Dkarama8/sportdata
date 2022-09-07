@props(['active' => false])

@php
    $classes = 'block px-3 text-sm hover:bg-gray-100 focus:outline-none focus:bg-gray-100';

    if ($active) $classes .= 'bg-gray-300';
@endphp

<a {{ $attributes(['class' => $classes]) }}
>{{ $slot }}</a>
