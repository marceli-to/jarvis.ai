@props(['size' => 'lg', 'tag' => 'h2'])

@php
$classes = $size === 'xl'
    ? 'text-4xl sm:text-5xl md:text-6xl font-semibold tracking-tight text-white -tracking-[0.02em]'
    : 'text-3xl sm:text-4xl font-semibold tracking-tight text-white -tracking-[0.02em]';
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</{{ $tag }}>
