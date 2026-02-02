<x-layout title="WBG File Transfer – Jarvis" description="A simple, secure file transfer tool built for WBG. Upload files, get shareable links with configurable expiration, and manage transfers through a clean dashboard.">

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
                    <h1 class="heading-lg">WBG File Transfer</h1>
                    <span class="badge badge-success">
                        <span class="status-dot status-dot-online"></span>
                        Live
                    </span>
                </div>
                <p class="text-xl text-muted leading-relaxed mb-8">A simple, secure file transfer tool built for WBG. Upload files, get shareable links with configurable expiration, and manage transfers through a clean dashboard.</p>
                <div class="flex items-center justify-between gap-4">
                    <div class="flex flex-wrap gap-2">
                        <span class="tag">Laravel</span>
                        <span class="tag">File Upload</span>
                        <span class="tag">API</span>
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
                            <span class="text-muted">Drag-and-drop file uploads</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">Unique token-based download links</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">Configurable expiration (1 week, 1 month, 1 year, or never)</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">Custom display names for shared files</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">User authentication and file ownership</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">API endpoints for programmatic uploads</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                            <span class="text-muted">Automatic cleanup of expired files</span>
                        </li>
                    </ul>
                </div>

                <!-- How it works -->
                <div class="animate-slide-up delay-700">
                    <h2 class="text-xl font-semibold text-white mb-6">How It Works</h2>
                    <p class="text-muted leading-relaxed">Users authenticate and upload files through the dashboard. Each file gets a unique token for secure sharing — the download URL contains only the token, not the filename. Files can be set to expire after a week, month, year, or never. The system tracks uploads per user and provides a simple management interface for renaming or deleting files.</p>
                </div>

                <!-- Tech Stack -->
                <div class="animate-slide-up delay-800">
                    <h2 class="text-xl font-semibold text-white mb-6">Tech Stack</h2>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="https://cdn.simpleicons.org/laravel/white" alt="Laravel" class="w-6 h-6">
                                Laravel 11
                            </h3>
                            <p class="text-sm text-subtle">Backend framework with built-in file handling</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="https://cdn.simpleicons.org/livewire/white" alt="Livewire" class="w-6 h-6">
                                Livewire
                            </h3>
                            <p class="text-sm text-subtle">Reactive dashboard without page reloads</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="https://cdn.simpleicons.org/tailwindcss/white" alt="Tailwind CSS" class="w-6 h-6">
                                Tailwind CSS
                            </h3>
                            <p class="text-sm text-subtle">Clean, minimal interface design</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1">Local Storage</h3>
                            <p class="text-sm text-subtle">Secure file storage with token-based access</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>

</x-layout>
