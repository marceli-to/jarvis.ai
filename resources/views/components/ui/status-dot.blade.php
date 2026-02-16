@props(['status' => 'online'])

@php
$classes = 'size-2 rounded-full';
if ($status === 'online') {
    $classes .= ' bg-green-500 shadow-[0_0_8px_rgba(34,197,94,0.5)]';
} else {
    $classes .= ' bg-gray-600';
}
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}></span>
