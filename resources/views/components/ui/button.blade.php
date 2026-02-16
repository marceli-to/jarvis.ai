@props(['variant' => 'primary', 'href' => null, 'type' => 'button', 'icon' => null])

@php
$base = 'inline-flex items-center justify-center gap-2 px-4 py-2 text-sm rounded-lg transition-all duration-150';
$variants = [
    'primary' => 'bg-white text-black hover:bg-gray-200',
    'secondary' => 'bg-white/[0.08] text-gray-300 border border-white/[0.08] hover:bg-white/[0.12] hover:border-white/[0.15] hover:text-white',
];
$classes = $base . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        @if($icon)<i class="{{ $icon }}" aria-hidden="true"></i>@endif
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        @if($icon)<i class="{{ $icon }}" aria-hidden="true"></i>@endif
        {{ $slot }}
    </button>
@endif
