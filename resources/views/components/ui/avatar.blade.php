@props(['src' => null, 'alt' => '', 'initials' => null, 'size' => 'md'])

@php
$sizes = [
    'sm' => 'size-8 text-xs',
    'md' => 'size-10 text-sm',
    'lg' => 'size-14 text-lg',
];
$sizeClass = $sizes[$size] ?? $sizes['md'];
@endphp

<div {{ $attributes->merge(['class' => "inline-flex items-center justify-center rounded-full font-medium text-white overflow-hidden bg-white/10 border border-white/[0.08] {$sizeClass}"]) }}>
    @if($src)
        <img src="{{ $src }}" alt="{{ $alt }}" class="w-full h-full object-cover">
    @elseif($initials)
        {{ $initials }}
    @else
        <i class="ph ph-user" aria-hidden="true"></i>
    @endif
</div>
