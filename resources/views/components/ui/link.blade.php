@props(['href' => '#', 'external' => false])

<a href="{{ $href }}"
   {{ $attributes->merge(['class' => 'text-gray-300 hover:text-white link-underline transition-colors duration-150']) }}
   @if($external) target="_blank" rel="noopener noreferrer" @endif
>
    {{ $slot }}
    @if($external)
        <i class="ph ph-arrow-up-right text-xs ml-0.5" aria-hidden="true"></i>
    @endif
</a>
