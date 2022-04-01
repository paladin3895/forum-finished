@php
$classes = 'text-yellow-500 mt-4 uppercase font-semibold text-sm';
@endphp

<div>
    <h2 {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </h2>
</div>
