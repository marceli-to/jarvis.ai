@props(['variant' => 'info', 'dismissible' => false])

@php
$icons = [
    'info' => 'ph ph-info',
    'success' => 'ph ph-check-circle',
    'warning' => 'ph ph-warning',
    'error' => 'ph ph-x-circle',
];
$icon = $icons[$variant] ?? $icons['info'];

$styles = [
    'info' => 'bg-blue-500/[0.08] border-blue-500/20 text-blue-300',
    'success' => 'bg-green-500/[0.08] border-green-500/20 text-green-300',
    'warning' => 'bg-yellow-500/[0.08] border-yellow-500/20 text-yellow-200',
    'error' => 'bg-red-500/[0.08] border-red-500/20 text-red-300',
];
$style = $styles[$variant] ?? $styles['info'];
@endphp

<div {{ $attributes->merge(['class' => "flex items-start gap-3 rounded-lg px-4 py-3 text-sm border {$style}"]) }}>
    <i class="{{ $icon }} text-lg shrink-0 mt-0.5" aria-hidden="true"></i>
    <div class="flex-1">{{ $slot }}</div>
    @if($dismissible)
        <button onclick="this.closest('[class*=flex]').remove()" class="shrink-0 opacity-60 hover:opacity-100 transition-opacity">
            <i class="ph ph-x" aria-hidden="true"></i>
        </button>
    @endif
</div>
