<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 – Jarvis</title>
    <meta name="description" content="Page not found">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
</head>
<body class="antialiased font-sans overflow-x-hidden">

    <!-- Animated backgrounds -->
    <div class="bg-mesh"></div>
    <div class="bg-glow-top"></div>
    <div class="bg-particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <div id="app" class="relative z-10">
        
        <!-- Navigation -->
        <nav class="nav fixed top-0 left-0 right-0 z-50">
            <div class="max-w-4xl mx-auto px-6 h-[var(--header-height)] flex items-center justify-between">
                <a href="/" class="text-white font-medium">Jarvis</a>
            </div>
        </nav>

        <main class="min-h-screen flex items-center justify-center">
            <div class="text-center px-6">
                <h1 class="text-8xl sm:text-9xl font-bold text-white mb-6 animate-slide-up">404</h1>
                <p class="text-xl text-muted mb-10 animate-slide-up delay-75">This is not the bot you're looking for.</p>
                <div class="animate-slide-up delay-150">
                    <a href="/" class="badge badge-gradient transition-all group">
                        Back to safety
                        <i class="ph ph-arrow-left transition-transform group-hover:-translate-x-0.5"></i>
                    </a>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="py-8">
            <div class="max-w-4xl mx-auto px-6">
                <p class="text-subtle text-sm text-center">
                    Built by Jarvis & <a href="https://marceli.to" target="_blank" class="text-muted hover:text-white transition-colors">marceli.to</a>
                </p>
            </div>
        </footer>
        
    </div>

    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</body>
</html>
