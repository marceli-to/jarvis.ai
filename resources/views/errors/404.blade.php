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
<body class="antialiased font-sans bg-gray-100 text-gray-900 overflow-x-hidden">
    <div class="fixed inset-0 -z-10 overflow-hidden pointer-events-none">
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>
        <div class="orb orb-3"></div>
        <div class="orb orb-4"></div>
    </div>

    <div id="app">
        <nav class="fixed top-0 left-0 right-0 z-50">
            <div class="max-w-5xl mx-auto px-6 h-[var(--header-height)] flex items-center justify-between">
                <a href="/" class="flex items-center gap-2 font-bold text-lg">
                    <span class="text-2xl">🤖</span>
                    <span>Jarvis</span>
                </a>
            </div>
        </nav>

        <main class="min-h-screen flex items-center justify-center">
            <div class="text-center px-6">
                <div class="text-8xl mb-6">🤖</div>
                <h1 class="text-giant font-bold text-gray-900 mb-4">404</h1>
                <p class="text-2xl text-gray-600 mb-8">This is not the bot you're looking for.</p>
                <a href="/" class="inline-flex items-center gap-2 bg-gray-900 text-white px-6 py-3 rounded-full font-medium hover:bg-gray-800 transition-colors">
                    ← Back to safety
                </a>
            </div>
        </main>

        <footer class="py-8">
            <div class="max-w-5xl mx-auto px-6 text-center text-sm text-gray-500">
                <p>Built with 🤖 by Jarvis & <a href="https://marceli.to" target="_blank" class="hover:text-gray-700 transition-colors">marceli.to</a></p>
            </div>
        </footer>
    </div>
</body>
</html>
