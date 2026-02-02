<x-layout title="Egli-Gress-Hüppi Tippspiel – Jarvis" description="A complete rewrite of a legacy Java sports prediction game. Users compete by predicting match outcomes, with live scoring, leaderboards, and tournament brackets.">

    <main class="py-16">
        <div class="max-w-4xl mx-auto px-6">
            
            <!-- Top bar -->
            <div class="mb-12 animate-slide-up delay-900">
                <a href="/#projects" class="inline-flex items-center gap-2 text-sm text-muted hover:text-white transition-colors">
                    <i class="ph ph-arrow-left"></i>
                    Back to projects
                </a>
            </div>

            <!-- Header -->
            <div class="mb-16 animate-slide-up delay-300">
                <div class="flex items-center gap-3 mb-6">
                    <h1 class="heading-lg">Egli-Gress-Hüppi Tippspiel</h1>
                    <span class="badge badge-success">
                        <span class="status-dot status-dot-online"></span>
                        Live
                    </span>
                </div>
                <p class="text-xl text-muted leading-relaxed mb-8">A complete rewrite of a legacy Java sports prediction game. Users compete by predicting match outcomes, with live scoring, leaderboards, and tournament brackets. Ported from a complex Java/Keycloak stack to a clean Laravel application.</p>
                <div class="flex items-center justify-between gap-4">
                    <div class="flex flex-wrap gap-2">
                        <span class="tag">Laravel</span>
                        <span class="tag">Livewire</span>
                        <span class="tag">Tailwind</span>
                        <span class="tag">Java Migration</span>
                    </div>
                    <div class="flex items-center gap-3">
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-y-24">
                <!-- Features -->
                <div class="animate-slide-up delay-600">
                    <h2 class="text-xl font-semibold text-white mb-6">Features</h2>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">Match predictions with live score updates</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">Automatic point calculation based on prediction accuracy</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">Real-time leaderboards and rankings</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">Tournament brackets (group stage → knockouts)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">Special predictions (tournament winner, top scorer, etc.)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">User groups for private competitions</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">Historical score tracking and statistics</span>
                        </li>
                    </ul>
                </div>

                <!-- How it works -->
                <div class="animate-slide-up delay-700">
                    <h2 class="text-xl font-semibold text-white mb-6">How It Works</h2>
                    <p class="text-muted leading-relaxed">The original egli-gress was a Java application with Keycloak authentication and a complex deployment setup. We rebuilt it entirely in Laravel with a modern stack: Livewire for reactive components, Tailwind for styling, and simplified auth. The database schema was migrated and cleaned up, and the UI was completely redesigned for better mobile support.</p>
                </div>

                <!-- Tech Stack -->
                <div class="animate-slide-up delay-800">
                    <h2 class="text-xl font-semibold text-white mb-6">Tech Stack</h2>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="https://cdn.simpleicons.org/laravel/white" alt="Laravel" class="w-4 h-4">
                                Laravel 11
                            </h3>
                            <p class="text-sm text-subtle">Modern PHP framework replacing legacy Java backend</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="https://cdn.simpleicons.org/livewire/white" alt="Livewire" class="w-4 h-4">
                                Livewire
                            </h3>
                            <p class="text-sm text-subtle">Reactive UI components without heavy JavaScript</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="https://cdn.simpleicons.org/tailwindcss/white" alt="Tailwind CSS" class="w-4 h-4">
                                Tailwind CSS
                            </h3>
                            <p class="text-sm text-subtle">Utility-first styling for the new interface</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="https://cdn.simpleicons.org/mysql/white" alt="MySQL" class="w-4 h-4">
                                MySQL
                            </h3>
                            <p class="text-sm text-subtle">Database migrated from the original schema</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="https://cdn.simpleicons.org/vite/white" alt="Vite" class="w-4 h-4">
                                Vite
                            </h3>
                            <p class="text-sm text-subtle">Fast frontend build tooling</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>

</x-layout>
