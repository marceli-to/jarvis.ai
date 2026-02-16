@props(['variant' => 'default'])

@php
$base = 'inline-flex items-center gap-2 rounded-full';
$variants = [
    'default' => 'px-3 py-1 text-xs font-normal bg-white/[0.06] border border-white/[0.08] text-gray-400',
    'success' => 'px-3 py-1 text-xs font-normal bg-white/[0.06] border border-white/[0.08] text-green-500',
    'gradient' => 'px-4 py-2 text-sm bg-violet-400/10 border border-violet-400 text-violet-400 hover:bg-violet-400/20 hover:text-violet-300 hover:border-violet-300',
];
$classes = $base . ' ' . ($variants[$variant] ?? $variants['default']);
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>
