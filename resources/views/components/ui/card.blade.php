@props(['interactive' => false, 'glow' => false, 'href' => null])

@php
$classes = 'card';
if ($interactive) $classes .= ' card-interactive';
if ($glow) $classes .= ' glow-subtle';
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <div {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </div>
@endif
