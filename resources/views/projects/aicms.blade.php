<x-layout title="AI CMS – Jarvis" description="A Laravel package that adds an AI-powered content editor to any site. No admin panel needed — just chat with Claude to edit text, and it updates your files directly.">

    <main class="py-16">
        <div class="max-w-4xl mx-auto px-6">
            
            <!-- Top bar -->
            <div class="mb-12">
                <a href="/#projects" class="inline-flex items-center gap-2 text-sm text-muted hover:text-white transition-colors">
                    <i class="ph ph-arrow-left"></i>
                    Back to projects
                </a>
            </div>

            <!-- Header -->
            <div class="mb-16 animate-slide-up">
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-4">
                        <h1 class="heading-lg">AI CMS</h1>
                        <span class="badge badge-success">
                            <span class="status-dot status-dot-online"></span>
                            Live
                        </span>
                    </div>
                    <p class="text-xl text-muted">Edit your website with natural language</p>
                </div>
                <div class="flex flex-wrap gap-2">
                    <span class="tag">Laravel</span>
                    <span class="tag">Livewire</span>
                    <span class="tag">Claude API</span>
                </div>
            </div>

            <!-- Description -->
            <div class="mb-16 animate-slide-up delay-75">
                <p class="text-xl text-muted leading-relaxed mb-8">A Laravel package that adds an AI-powered content editor to any site. No admin panel needed — just chat with Claude to edit text, and it updates your files directly. Change history with undo, beautiful glassmorphic UI.</p>
                <div class="flex items-center gap-3">
                    <a href="https://github.com/marceli-to/aicms" target="_blank" class="badge badge-gradient transition-all">
                        <i class="ph ph-github-logo"></i>
                        GitHub
                    </a>
                </div>
            </div>

            <!-- Features -->
            <div class="card mb-12 animate-slide-up delay-150">
                <h2 class="text-xl font-semibold text-white mb-6">Features</h2>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                        <span class="text-muted">Natural language content editing</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                        <span class="text-muted">Works with Blade templates and Markdown files</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                        <span class="text-muted">Change history with one-click undo</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                        <span class="text-muted">Configurable editable paths</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                        <span class="text-muted">Uses your existing Laravel auth</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                        <span class="text-muted">Glassmorphic chat UI</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                        <span class="text-muted">Install via Composer in minutes</span>
                    </li>
                </ul>
            </div>

            <!-- Commands -->
            <div class="card mb-12 animate-slide-up delay-225">
                <h2 class="text-xl font-semibold text-white mb-6">Installation</h2>
                <div class="space-y-4">
                    <div class="flex flex-col sm:flex-row sm:items-start gap-2 sm:gap-4">
                        <code class="text-emerald-400 font-mono text-sm bg-white/5 px-2 py-1 rounded shrink-0">composer require marceli-to/aicms</code>
                        <span class="text-subtle text-sm">Install the package</span>
                    </div>
                    <div class="flex flex-col sm:flex-row sm:items-start gap-2 sm:gap-4">
                        <code class="text-emerald-400 font-mono text-sm bg-white/5 px-2 py-1 rounded shrink-0">php artisan vendor:publish --tag=aicms-config</code>
                        <span class="text-subtle text-sm">Publish config file</span>
                    </div>
                    <div class="flex flex-col sm:flex-row sm:items-start gap-2 sm:gap-4">
                        <code class="text-emerald-400 font-mono text-sm bg-white/5 px-2 py-1 rounded shrink-0">php artisan migrate</code>
                        <span class="text-subtle text-sm">Create change history table</span>
                    </div>
                </div>
            </div>

            <!-- How it works -->
            <div class="card mb-12 animate-slide-up delay-300">
                <h2 class="text-xl font-semibold text-white mb-6">How It Works</h2>
                <p class="text-muted leading-relaxed">Install the package, configure which files are editable (Blade views, Markdown, etc.), and visit /aicms. Type what you want to change — "Update the homepage title to Welcome" — and Claude reads the file, makes the edit, and saves it. Every change is logged so you can undo anytime.</p>
            </div>

            <!-- Tech Stack -->
            <div class="card mb-12 animate-slide-up delay-375">
                <h2 class="text-xl font-semibold text-white mb-6">Tech Stack</h2>
                <div class="grid sm:grid-cols-2 gap-4">
                    <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                        <h3 class="text-white mb-1">Laravel 12</h3>
                        <p class="text-sm text-subtle">Package built for the latest Laravel</p>
                    </div>
                    <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                        <h3 class="text-white mb-1">Livewire 3</h3>
                        <p class="text-sm text-subtle">Reactive chat interface</p>
                    </div>
                    <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                        <h3 class="text-white mb-1">Claude API</h3>
                        <p class="text-sm text-subtle">Anthropic's AI for natural language understanding</p>
                    </div>
                    <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                        <h3 class="text-white mb-1">Tailwind CSS</h3>
                        <p class="text-sm text-subtle">Beautiful glassmorphic design</p>
                    </div>
                </div>
            </div>
            
        </div>
    </main>

</x-layout>
