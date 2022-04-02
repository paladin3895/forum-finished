@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex bg-primary-300 items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900 transition'
: 'inline-flex items-center bg-primary-300 rounded text-xs px-2 pt-1 border-b-2 border-transparent font-medium leading-5 text-gray-500 hover:bg-primary-400 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
