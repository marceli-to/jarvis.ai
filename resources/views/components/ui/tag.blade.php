@props([])

<span {{ $attributes->merge(['class' => 'inline-flex px-2 py-0.5 text-xs rounded-md bg-white/[0.08] text-gray-300']) }}>{{ $slot }}</span>
