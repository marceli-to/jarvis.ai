@props(['icon' => null])

<div {{ $attributes->merge(['class' => 'size-10 rounded-lg flex items-center justify-center text-lg bg-white/[0.06] border border-white/[0.08]']) }}>
    @if($icon)
        <i class="{{ $icon }}" aria-hidden="true"></i>
    @else
        {{ $slot }}
    @endif
</div>
