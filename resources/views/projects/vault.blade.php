<x-layout :hideNav="true" title="Vault – Jarvis" description="A personal vault and second brain app. Save notes, links, ideas, and tasks — all API-powered and designed for fast capture.">

    <!-- Back link (replaces nav) -->
    <div class="sticky top-0 z-50 pt-2">
        <div class="max-w-4xl mx-auto px-6 h-[var(--header-height)] flex items-center justify-between">
            <a href="/#projects" class="inline-flex items-center gap-2 text-sm text-muted hover:text-white transition-colors" aria-label="Back to projects list">
                <i class="ph ph-arrow-left" aria-hidden="true"></i>
                Back to projects
            </a>
            <a href="https://vault.marceli.to" target="_blank" rel="noopener noreferrer" class="badge badge-gradient transition-all group" aria-label="Visit Vault">
                <i class="ph ph-arrow-square-out" aria-hidden="true"></i>
                Visit
            </a>
        </div>
    </div>

    <main class="py-16">
        <div class="max-w-4xl mx-auto px-6">

            <!-- Header -->
            <div class="mb-16 animate-slide-up delay-300">
                <div class="flex items-center gap-3 mb-6">
                    <h1 class="heading-lg">Vault</h1>
                    <span class="badge badge-success">
                        <span class="status-dot status-dot-online"></span>
                        Live
                    </span>
                </div>
                <p class="text-xl text-muted leading-relaxed mb-4">A personal vault and second brain. Save notes, links, ideas, and manage tasks — all in one place. API-powered so Jarvis can add entries directly from Telegram.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="tag">Laravel</span>
                    <span class="tag">Vue 3</span>
                    <span class="tag">Tailwind</span>
                    <span class="tag">API</span>
                </div>
            </div>

            <div class="flex flex-col gap-y-24">
                <!-- Features -->
                <div class="animate-slide-up delay-600">
                    <h2 class="text-xl font-semibold text-white mb-6">Features</h2>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Save notes, links, and ideas with auto-generated titles and tags</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Task management with priorities and due dates</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Tag system for organizing and filtering entries</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Pin important entries for quick access</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Full REST API — add entries and tasks from anywhere</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">AI integration — Jarvis adds entries via Telegram commands</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Amber (light) / Violet (dark) theme</span>
                        </li>
                    </ul>
                </div>

                <!-- Why -->
                <div class="animate-slide-up delay-700">
                    <h2 class="text-xl font-semibold text-white mb-6">Why Build This?</h2>
                    <p class="text-muted leading-relaxed">I needed a personal second brain that's fast to capture into — especially from Telegram via Jarvis. Notion is bloated, Apple Notes isn't API-friendly. Vault is minimal, API-first, and exactly what I need: dump a link, jot a thought, track a task. Done.</p>
                </div>

                <!-- Tech Stack -->
                <div class="animate-slide-up delay-800">
                    <h2 class="text-xl font-semibold text-white mb-6">Tech Stack</h2>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="/icons/tech/laravel.svg" alt="Laravel" class="w-4 h-4">
                                Laravel
                            </h3>
                            <p class="text-sm text-subtle">Backend + API</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="/icons/tech/vuedotjs.svg" alt="Vue 3" class="w-4 h-4">
                                Vue 3
                            </h3>
                            <p class="text-sm text-subtle">Reactive frontend SPA</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                Inertia.js
                            </h3>
                            <p class="text-sm text-subtle">Server-driven SPA routing</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="/icons/tech/tailwindcss.svg" alt="Tailwind CSS" class="w-4 h-4">
                                Tailwind CSS
                            </h3>
                            <p class="text-sm text-subtle">Utility-first styling</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <i class="ph ph-robot" aria-hidden="true"></i>
                                OpenClaw / Jarvis
                            </h3>
                            <p class="text-sm text-subtle">AI-powered entry capture via Telegram</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

</x-layout>
