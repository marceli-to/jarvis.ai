@props(['label' => null, 'name', 'options' => [], 'selected' => null, 'placeholder' => 'Select...', 'help' => null, 'error' => null])

<div>
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-normal text-gray-300 mb-1.5">{{ $label }}</label>
    @endif
    <div class="relative">
        <select
            name="{{ $name }}"
            id="{{ $name }}"
            {{ $attributes->merge(['class' => 'w-full rounded-lg px-3 py-2 pr-10 text-sm text-white outline-none transition-colors duration-150 bg-white/[0.04] border border-white/[0.08] focus:border-violet-400/50 focus:bg-white/[0.06] appearance-none' . ($error ? ' border-red-400/50' : '')]) }}
        >
            @if($placeholder)
                <option value="" disabled {{ !$selected ? 'selected' : '' }}>{{ $placeholder }}</option>
            @endif
            @foreach($options as $value => $optionLabel)
                <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }}>{{ $optionLabel }}</option>
            @endforeach
        </select>
        <i class="ph ph-caret-down absolute right-3 top-1/2 -translate-y-1/2 text-gray-500 text-xs pointer-events-none" aria-hidden="true"></i>
    </div>
    @if($error)
        <p class="text-xs text-red-400 mt-1.5">{{ $error }}</p>
    @elseif($help)
        <p class="text-xs text-gray-500 mt-1.5">{{ $help }}</p>
    @endif
</div>
