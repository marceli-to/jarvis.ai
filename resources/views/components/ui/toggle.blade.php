@props(['name', 'label' => null, 'checked' => false])

<label class="inline-flex items-center gap-3 cursor-pointer">
    <button
        type="button"
        role="switch"
        aria-checked="{{ $checked ? 'true' : 'false' }}"
        class="relative w-10 h-5 rounded-full transition-colors duration-200 {{ $checked ? 'bg-violet-400/30 border-violet-400' : 'bg-white/10 border-white/[0.08]' }} border"
        onclick="
            const on = this.getAttribute('aria-checked') === 'true';
            this.setAttribute('aria-checked', !on);
            this.querySelector('span').style.transform = !on ? 'translateX(calc(100% + 2px))' : 'translateX(0)';
            this.classList.toggle('bg-violet-400/30', !on);
            this.classList.toggle('border-violet-400', !on);
            this.classList.toggle('bg-white/10', on);
            this.classList.toggle('border-white/[0.08]', on);
            this.querySelector('span').classList.toggle('bg-violet-400', !on);
            this.querySelector('span').classList.toggle('bg-gray-400', on);
            this.nextElementSibling.value = !on ? '1' : '0';
        "
    >
        <span class="absolute top-0.5 left-0.5 size-4 rounded-full transition-transform duration-200 {{ $checked ? 'bg-violet-400' : 'bg-gray-400' }}" style="transform: {{ $checked ? 'translateX(calc(100% + 2px))' : 'translateX(0)' }}"></span>
    </button>
    <input type="hidden" name="{{ $name }}" value="{{ $checked ? '1' : '0' }}">
    @if($label)
        <span class="text-sm text-gray-300">{{ $label }}</span>
    @endif
</label>
