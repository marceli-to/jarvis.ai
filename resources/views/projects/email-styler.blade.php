<x-layout :hideNav="true" title="Email Styler – Jarvis" description="A local AI tool that learns your email writing style and helps you write new emails that sound exactly like you. 100% local — uses Ollama for generation, no data leaves your machine.">

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
                    <h1 class="heading-lg">Email Styler</h1>
                    <span class="badge badge-success">
                        <span class="status-dot status-dot-online"></span>
                        Live
                    </span>
                </div>
                <p class="text-xl text-muted leading-relaxed mb-8">A local AI tool that learns your email writing style and helps you write new emails that sound exactly like you. 100% local — uses Ollama for generation, no data leaves your machine.</p>
                <div class="flex items-center justify-between gap-4">
                    <div class="flex flex-wrap gap-2">
                        <span class="tag">Ollama</span>
                        <span class="tag">Node.js</span>
                        <span class="tag">RAG</span>
                        <span class="tag">CLI</span>
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
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Learns your writing style from your sent emails</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Generates new emails matching your tone and voice</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">RAG-based retrieval finds similar emails as context</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Works entirely offline with local Ollama models</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Supports .txt and .eml email formats</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Privacy-first: all processing happens on your Mac</span>
                        </li>
                    </ul>
                </div>

                <!-- Commands -->
                <div class="animate-slide-up delay-700">
                    <h2 class="text-xl font-semibold text-white mb-6">Commands</h2>
                    <div class="space-y-4">
                        <div class="flex flex-col sm:flex-row sm:items-start gap-2 sm:gap-4">
                            <code class="text-emerald-400 font-mono text-sm bg-white/5 px-2 py-1 rounded shrink-0">email-styler ingest &lt;dir&gt;</code>
                            <span class="text-subtle text-sm">Import your sent emails from a directory</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-start gap-2 sm:gap-4">
                            <code class="text-emerald-400 font-mono text-sm bg-white/5 px-2 py-1 rounded shrink-0">email-styler write "prompt"</code>
                            <span class="text-subtle text-sm">Generate an email in your style</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-start gap-2 sm:gap-4">
                            <code class="text-emerald-400 font-mono text-sm bg-white/5 px-2 py-1 rounded shrink-0">email-styler list</code>
                            <span class="text-subtle text-sm">Show ingested emails</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-start gap-2 sm:gap-4">
                            <code class="text-emerald-400 font-mono text-sm bg-white/5 px-2 py-1 rounded shrink-0">email-styler test</code>
                            <span class="text-subtle text-sm">Test Ollama connection</span>
                        </div>
                    </div>
                </div>

                <!-- How it works -->
                <div class="animate-slide-up delay-800">
                    <h2 class="text-xl font-semibold text-white mb-6">How It Works</h2>
                    <p class="text-muted leading-relaxed">First, you ingest your sent emails — they get embedded using nomic-embed-text and stored locally in ~/.email-styler/. When you write, your prompt is embedded and similar emails are retrieved as style examples. These are fed to Llama 3.1 as context, which then generates a new email matching your writing style, tone, and voice.</p>
                </div>

                <!-- Tech Stack -->
                <div class="animate-slide-up delay-900">
                    <h2 class="text-xl font-semibold text-white mb-6">Tech Stack</h2>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="/icons/tech/ollama.svg" alt="Ollama" class="w-4 h-4">
                                Ollama
                            </h3>
                            <p class="text-sm text-subtle">Local LLM inference with Llama 3.1 8B</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1">nomic-embed-text</h3>
                            <p class="text-sm text-subtle">Local embeddings for similarity search</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="/icons/tech/nodedotjs.svg" alt="Node.js" class="w-4 h-4">
                                Node.js
                            </h3>
                            <p class="text-sm text-subtle">CLI tool and processing logic</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1">RAG</h3>
                            <p class="text-sm text-subtle">Retrieval-augmented generation for style matching</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>

</x-layout>
