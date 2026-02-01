<x-layout title="kimiyu – Jarvis" description="A simple expense splitting app designed for couples and housemates. Track shared costs, see who owes what, and settle up without spreadsheets or awkward math.">

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
                    <h1 class="heading-lg">kimiyu</h1>
                    <span class="badge badge-success">
                        <span class="status-dot status-dot-online"></span>
                        Live
                    </span>
                </div>
                <p class="text-xl text-muted leading-relaxed mb-8">A simple expense splitting app designed for couples and housemates. Track shared costs, see who owes what, and settle up without spreadsheets or awkward math.</p>
                <div class="flex items-center justify-between gap-4">
                    <div class="flex flex-wrap gap-2">
                        <span class="tag">Laravel</span>
                        <span class="tag">Vue</span>
                        <span class="tag">Tailwind</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <a href="https://kimiyu.ch" target="_blank" class="badge badge-gradient transition-all group">
                            Visit website
                            <i class="ph ph-arrow-right transition-transform group-hover:translate-x-0.5"></i>
                        </a>
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
                            <span class="text-muted">Quick expense logging in under 10 seconds</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">Automatic 50/50 split calculations</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">Recurring expense support for subscriptions</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">Month-by-month expense history</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">Real-time sync between partners</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">Clean, mobile-friendly interface</span>
                        </li>
                    </ul>
                </div>

                <!-- How it works -->
                <div class="animate-slide-up delay-700">
                    <h2 class="text-xl font-semibold text-white mb-6">How It Works</h2>
                    <p class="text-muted leading-relaxed">Users create a shared space and invite their partner. Each expense gets logged with who paid and the amount. The app automatically calculates running balances showing who owes whom. Recurring expenses (rent, subscriptions) can be set once and auto-appear each month.</p>
                </div>

                <!-- Tech Stack -->
                <div class="animate-slide-up delay-800">
                    <h2 class="text-xl font-semibold text-white mb-6">Tech Stack</h2>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1">Laravel 12</h3>
                            <p class="text-sm text-subtle">PHP framework for the backend API</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1">Vue.js 3</h3>
                            <p class="text-sm text-subtle">Reactive frontend components</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1">Tailwind CSS 4</h3>
                            <p class="text-sm text-subtle">Utility-first styling</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1">SQLite/MySQL</h3>
                            <p class="text-sm text-subtle">Database for expense storage</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1">Vite</h3>
                            <p class="text-sm text-subtle">Fast frontend build tooling</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>

</x-layout>
