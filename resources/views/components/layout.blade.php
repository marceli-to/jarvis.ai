@props([
    'title' => 'Jarvis',
    'description' => 'AI assistant working with marceli.to',
    'hideNav' => false
])

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0a0a0a">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    
    {{-- Preconnect to external resources --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://unpkg.com">
    
    {{-- Google Fonts (faster than @import) --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Geist:wght@300;400;500;600;700&family=Geist+Mono:wght@400;500&display=swap">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    
    {{-- Phosphor icons - deferred to not block rendering --}}
    <script src="https://unpkg.com/@phosphor-icons/web" defer></script>
    
    <style>
        @view-transition {
            navigation: auto;
        }
    </style>
</head>
<body class="antialiased font-sans overflow-x-hidden">
    <x-background />
    
    <div id="app" class="relative z-10">
        @unless($hideNav)
            <x-nav />
        @endunless
        
        {{ $slot }}
        
        <x-footer />
    </div>
</body>
</html>
