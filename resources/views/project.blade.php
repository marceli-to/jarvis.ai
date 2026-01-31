<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $project['title'] }} – Jarvis</title>
    <meta name="description" content="{{ $project['description'] }}">
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
        <nav class="sticky top-0 left-0 right-0 z-50">
            <div class="max-w-5xl mx-auto px-6 h-[var(--header-height)] flex items-center justify-between">
                <a href="/" class="flex items-center gap-2 font-bold text-lg">
                    <span class="text-2xl">🤖</span>
                    <span>Jarvis</span>
                </a>
                <div class="flex items-center gap-6">
                    <a href="/#projects" class="text-sm text-gray-600 hover:text-gray-900 transition-colors">Projects</a>
                    <a href="/#tools" class="text-sm text-gray-600 hover:text-gray-900 transition-colors">Tools</a>
                    <a href="/#about" class="text-sm text-gray-600 hover:text-gray-900 transition-colors">About</a>
                </div>
            </div>
        </nav>

        <main class="pt-32 pb-24">
            <div class="max-w-4xl mx-auto px-6">
                <!-- Back link -->
                <a href="/#projects" class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-gray-900 transition-colors mb-8">
                    ← Back to projects
                </a>

                <!-- Header -->
                <div class="mb-12">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-16 h-16 rounded-2xl flex items-center justify-center text-3xl
                            @if($project['iconColor'] === 'blue') bg-blue-100
                            @elseif($project['iconColor'] === 'purple') bg-purple-100
                            @elseif($project['iconColor'] === 'green') bg-green-100
                            @else bg-cyan-100
                            @endif">
                            {{ $project['icon'] }}
                        </div>
                        <div>
                            <div class="flex items-center gap-3 mb-2">
                                <h1 class="text-4xl font-bold">{{ $project['title'] }}</h1>
                                <span class="text-xs px-2 py-1 rounded-full
                                    @if($project['status'] === 'Live') bg-green-100 text-green-700
                                    @elseif($project['status'] === 'In Progress') bg-yellow-100 text-yellow-700
                                    @elseif($project['status'] === 'Beta') bg-purple-100 text-purple-700
                                    @else bg-gray-100 text-gray-600
                                    @endif">
                                    {{ $project['status'] }}
                                </span>
                            </div>
                            <p class="text-xl text-gray-500">{{ $project['tagline'] }}</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        @foreach($project['tags'] as $tag)
                            <span class="text-sm bg-gray-200 text-gray-700 px-3 py-1 rounded-full">{{ $tag }}</span>
                        @endforeach
                        @if(isset($project['link']))
                            <a href="{{ $project['link'] }}" target="_blank" class="text-sm bg-gray-900 text-white px-3 py-1 rounded-full hover:bg-gray-700 transition-colors">Visit website</a>
                        @endif
                        @if(isset($project['github']) && $project['github'])
                            <a href="{{ $project['github'] }}" target="_blank" class="text-sm bg-gray-900 text-white px-3 py-1 rounded-full hover:bg-gray-700 transition-colors">Open GitHub</a>
                        @endif
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-12">
                    <p class="text-2xl text-gray-600 leading-snug font-medium">{{ $project['description'] }}</p>
                </div>

                <!-- Features -->
                <div class="bg-white/60 backdrop-blur-sm rounded-2xl p-8 mb-8">
                    <h2 class="text-2xl font-bold mb-6">Features</h2>
                    <ul class="space-y-3">
                        @foreach($project['features'] as $feature)
                            <li class="flex items-start gap-3">
                                <span class="text-jarvis-500 mt-1">✓</span>
                                <span class="text-gray-700">{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                @if(isset($project['commands']))
                <!-- Commands -->
                <div class="bg-white/60 backdrop-blur-sm rounded-2xl p-8 mb-8">
                    <h2 class="text-2xl font-bold mb-6">Commands</h2>
                    <div class="space-y-3">
                        @foreach($project['commands'] as $cmd => $desc)
                            <div class="flex flex-col sm:flex-row sm:items-start gap-2 sm:gap-4">
                                <code class="text-jarvis-700 font-mono text-sm bg-jarvis-50 px-2 py-1 rounded shrink-0">{{ $cmd }}</code>
                                <span class="text-gray-500 text-sm">{{ $desc }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- How it works -->
                <div class="bg-white/60 backdrop-blur-sm rounded-2xl p-8 mb-8">
                    <h2 class="text-2xl font-bold mb-6">How It Works</h2>
                    <p class="text-gray-700 leading-relaxed">{{ $project['how_it_works'] }}</p>
                </div>

                <!-- Tech Stack -->
                <div class="bg-white/60 backdrop-blur-sm rounded-2xl p-8 mb-8">
                    <h2 class="text-2xl font-bold mb-6">Tech Stack</h2>
                    <div class="grid sm:grid-cols-2 gap-4">
                        @foreach($project['tech'] as $name => $desc)
                            <div class="bg-white/50 rounded-xl p-4">
                                <h3 class="font-semibold text-gray-900 mb-1">{{ $name }}</h3>
                                <p class="text-sm text-gray-500">{{ $desc }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
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
