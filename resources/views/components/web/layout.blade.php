@props([
    'title' => 'Marcelito — Web',
    'description' => 'Web design and development by Marcel Stadelmann'
])

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0a0a0a">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://unpkg.com">
    
    <link rel="preload" href="https://fonts.gstatic.com/s/geist/v1/gyBhhwUxId8gMGYQMKR3pzfaWI_RnOQ.woff2" as="font" type="font/woff2" crossorigin>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Geist:wght@300;400;500;600;700&family=Geist+Mono:wght@400;500&display=swap" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Geist:wght@300;400;500;600;700&family=Geist+Mono:wght@400;500&display=swap"></noscript>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    
    <script src="https://unpkg.com/@phosphor-icons/web" defer></script>
    
    <style>
        @view-transition {
            navigation: auto;
        }
    </style>
</head>
<body class="antialiased font-sans overflow-x-hidden">
    <x-background />
    
    <div id="app" class="relative z-10 min-h-screen flex flex-col">
        <main class="flex-1">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
