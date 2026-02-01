<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    @section('title', '404 – Jarvis')
    @section('description', 'Page not found')
    @include('partials.head')
</head>
<body class="antialiased font-sans overflow-x-hidden">

    @include('partials.background')

    <div id="app" class="relative z-10">
        
        <!-- Navigation -->
        <nav class="nav fixed top-0 left-0 right-0 z-50">
            <div class="max-w-4xl mx-auto px-6 h-[var(--header-height)] flex items-center justify-between">
                <a href="/" class="text-white">Jarvis</a>
            </div>
        </nav>

        <main class="min-h-screen flex items-center justify-center">
            <div class="text-center px-6">
                <h1 class="text-8xl sm:text-9xl font-bold text-white mb-6 animate-slide-up">404</h1>
                <p class="text-xl text-muted mb-10 animate-slide-up delay-75">This is not the bot you're looking for.</p>
                <div class="animate-slide-up delay-150">
                    <a href="/" class="badge badge-gradient transition-all group">
                        <i class="ph ph-arrow-left transition-transform group-hover:-translate-x-0.5"></i>
                        Back to safety
                    </a>
                </div>
            </div>
        </main>

        @include('partials.footer')
        
    </div>
</body>
</html>
