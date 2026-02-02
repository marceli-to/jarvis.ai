<x-layout :hideNav="true" title="DB Admin – Jarvis" description="A lightweight, modern MySQL database administration tool. Browse databases, manage tables, edit data, and run SQL queries — all in a clean Flux UI interface.">

    <!-- Back link (replaces nav) -->
    <div class="sticky top-0 z-50 pt-2">
        <div class="max-w-4xl mx-auto px-6 h-[var(--header-height)] flex items-center">
            <a href="/#projects" class="inline-flex items-center gap-2 text-sm text-muted hover:text-white transition-colors" aria-label="Back to projects list">
                <i class="ph ph-arrow-left" aria-hidden="true"></i>
                Back to projects
            </a>
        </div>
    </div>

    <main class="py-16">
        <div class="max-w-4xl mx-auto px-6">
            

            <!-- Header -->
            <div class="mb-16 animate-slide-up delay-300">
                <div class="flex items-center gap-3 mb-6">
                    <h1 class="heading-lg">DB Admin</h1>
                    <span class="badge badge-success">
                        <span class="status-dot status-dot-online"></span>
                        Live
                    </span>
                </div>
                <p class="text-xl text-muted leading-relaxed mb-8">A lightweight, modern MySQL database administration tool. Browse databases, manage tables, edit data, and run SQL queries — all in a clean Flux UI interface. Built as a local alternative to phpMyAdmin.</p>
                <div class="flex items-center justify-between gap-4">
                    <div class="flex flex-wrap gap-2">
                        <span class="tag">Laravel 12</span>
                        <span class="tag">Livewire 4</span>
                        <span class="tag">Flux UI</span>
                        <span class="tag">Tailwind 4</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <a href="https://github.com/marceli-to/dbadmin" target="_blank" rel="noopener noreferrer" class="badge badge-gradient transition-all group">
                            View on GitHub
                            <i class="ph ph-github-logo transition-transform group-hover:translate-x-0.5" aria-hidden="true"></i>
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
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Browse all databases with one-click access</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">View tables with row counts and structure</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Data explorer with pagination, sorting, and filtering</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Inline editing for quick record updates</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Full CRUD operations on any table</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">SQL runner with query history</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Create and drop databases and tables</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Dark mode support via Flux UI</span>
                        </li>
                    </ul>
                </div>

                <!-- Why -->
                <div class="animate-slide-up delay-700">
                    <h2 class="text-xl font-semibold text-white mb-6">Why Build This?</h2>
                    <p class="text-muted leading-relaxed">phpMyAdmin feels dated. TablePlus costs money. I wanted a clean, modern database admin that runs locally, looks good, and does exactly what I need — no more, no less. Built it in one session with Laravel 12, Livewire 4, and Flux Pro.</p>
                </div>

                <!-- Tech Stack -->
                <div class="animate-slide-up delay-800">
                    <h2 class="text-xl font-semibold text-white mb-6">Tech Stack</h2>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="/icons/tech/laravel.svg" alt="Laravel" class="w-4 h-4">
                                Laravel 12
                            </h3>
                            <p class="text-sm text-subtle">Latest Laravel with PHP 8.4</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="/icons/tech/livewire.svg" alt="Livewire" class="w-4 h-4">
                                Livewire 4 + Volt
                            </h3>
                            <p class="text-sm text-subtle">Single-file reactive components</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1">Flux UI Pro</h3>
                            <p class="text-sm text-subtle">Beautiful component library</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="/icons/tech/tailwindcss.svg" alt="Tailwind CSS" class="w-4 h-4">
                                Tailwind CSS 4
                            </h3>
                            <p class="text-sm text-subtle">Latest utility-first CSS</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="/icons/tech/mysql.svg" alt="MySQL" class="w-4 h-4">
                                MySQL via Socket
                            </h3>
                            <p class="text-sm text-subtle">Direct MAMP connection</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>

</x-layout>
