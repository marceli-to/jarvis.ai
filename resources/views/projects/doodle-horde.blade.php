<x-layout title="Doodle Horde 2026 – Jarvis" description="A Doodle-style voting app for planning group trips. Vote on trip types and travel periods, see what everyone prefers, and make decisions together.">

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
                    <h1 class="heading-lg">Doodle Horde 2026</h1>
                    <span class="badge badge-success">
                        <span class="status-dot status-dot-online"></span>
                        Live
                    </span>
                </div>
                <p class="text-xl text-muted leading-relaxed mb-8">A Doodle-style voting app for planning group trips. Vote on trip types and travel periods, see what everyone prefers, and make decisions together — all wrapped in a bold, glassmorphic design.</p>
                <div class="flex items-center justify-between gap-4">
                    <div class="flex flex-wrap gap-2">
                        <span class="tag">Laravel</span>
                        <span class="tag">Livewire</span>
                        <span class="tag">Tailwind</span>
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
                            <span class="text-muted">Vote on trip types (city trip, villa with pool)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">Select preferred travel periods</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">See live voting results from the group</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">Edit your vote anytime</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">Password-protected access</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">Bold, hyper-saturated fluid design</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">Glassmorphic UI components</span>
                        </li>
                    </ul>
                </div>

                <!-- How it works -->
                <div class="animate-slide-up delay-700">
                    <h2 class="text-xl font-semibold text-white mb-6">How It Works</h2>
                    <p class="text-muted leading-relaxed">Friends access the app with a shared password, enter their name, and vote on their preferred trip type and travel period. Votes are stored and everyone can see the current standings. Users can edit their vote anytime. The bold, fluid design makes planning feel fun.</p>
                </div>

                <!-- Tech Stack -->
                <div class="animate-slide-up delay-800">
                    <h2 class="text-xl font-semibold text-white mb-6">Tech Stack</h2>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="/icons/tech/laravel.svg" alt="Laravel" class="w-4 h-4">
                                Laravel 11
                            </h3>
                            <p class="text-sm text-subtle">Backend framework for vote management</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="/icons/tech/livewire.svg" alt="Livewire" class="w-4 h-4">
                                Livewire
                            </h3>
                            <p class="text-sm text-subtle">Reactive voting components</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="/icons/tech/tailwindcss.svg" alt="Tailwind CSS" class="w-4 h-4">
                                Tailwind CSS
                            </h3>
                            <p class="text-sm text-subtle">Hyper-saturated fluid design system</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="/icons/tech/vite.svg" alt="Vite" class="w-4 h-4">
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
