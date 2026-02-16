@props(['name', 'label' => null, 'checked' => false, 'value' => '1'])

<label class="inline-flex items-center gap-2 cursor-pointer">
    <input
        type="checkbox"
        name="{{ $name }}"
        value="{{ $value }}"
        {{ $checked ? 'checked' : '' }}
        {{ $attributes->merge(['class' => 'size-4 cursor-pointer rounded appearance-none bg-white/[0.04] border border-white/[0.08] transition-colors duration-150 checked:bg-violet-400 checked:border-violet-400']) }}
    >
    @if($label)
        <span class="text-sm text-gray-300">{{ $label }}</span>
    @endif
</label>
