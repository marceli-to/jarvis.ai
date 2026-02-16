@props(['icon' => 'ph ph-check', 'iconColor' => 'text-green-400'])

<li class="flex items-start gap-3">
    <i class="{{ $icon }} {{ $iconColor }} text-lg shrink-0 mt-0.5" aria-hidden="true"></i>
    <span class="text-gray-300 text-sm">{{ $slot }}</span>
</li>
