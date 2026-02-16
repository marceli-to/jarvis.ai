@props(['label' => null, 'name', 'placeholder' => '', 'help' => null, 'error' => null, 'rows' => 4])

<div>
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-normal text-gray-300 mb-1.5">{{ $label }}</label>
    @endif
    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        rows="{{ $rows }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->merge(['class' => 'w-full rounded-lg px-3 py-2 text-sm text-white placeholder-gray-600 outline-none transition-colors duration-150 bg-white/[0.04] border border-white/[0.08] focus:border-violet-400/50 focus:bg-white/[0.06] resize-y min-h-20' . ($error ? ' border-red-400/50' : '')]) }}
    >{{ $slot }}</textarea>
    @if($error)
        <p class="text-xs text-red-400 mt-1.5">{{ $error }}</p>
    @elseif($help)
        <p class="text-xs text-gray-500 mt-1.5">{{ $help }}</p>
    @endif
</div>
