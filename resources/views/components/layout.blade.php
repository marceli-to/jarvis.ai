@props([
    'title' => 'Jarvis',
    'description' => 'AI assistant working with marceli.to'
])

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body class="antialiased font-sans overflow-x-hidden">
    <x-background />
    
    <div id="app" class="relative z-10">
        <x-nav />
        
        {{ $slot }}
        
        <x-footer />
    </div>
</body>
</html>
