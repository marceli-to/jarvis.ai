<x-layout :hideNav="true" title="Miyu CLI – Jarvis" description="A simple, stylish CLI for chatting with local Ollama models. Quick prompts, interactive chat, streaming responses — all in your terminal.">

    <!-- Back link (replaces nav) -->
    <div class="sticky top-0 z-50 pt-2">
        <div class="max-w-4xl mx-auto px-6 h-[var(--header-height)] flex items-center justify-between">
            <a href="/#projects" class="inline-flex items-center gap-2 text-sm text-muted hover:text-white transition-colors" aria-label="Back to projects list">
                <i class="ph ph-arrow-left" aria-hidden="true"></i>
                Back to projects
            </a>
            <a href="https://github.com/marceli-to/miyu-cli" target="_blank" rel="noopener noreferrer" class="badge badge-gradient transition-all group" aria-label="View Miyu CLI on GitHub">
                <i class="ph ph-github-logo" aria-hidden="true"></i>
                GitHub
            </a>
        </div>
    </div>

    <main class="py-16">
        <div class="max-w-4xl mx-auto px-6">
            

            <!-- Header -->
            <div class="mb-16 animate-slide-up delay-300">
                <div class="flex items-center gap-3 mb-6">
                    <h1 class="heading-lg">Miyu CLI</h1>
                    <span class="badge badge-success">
                        <span class="status-dot status-dot-online"></span>
                        Live
                    </span>
                </div>
                <p class="text-xl text-muted leading-relaxed mb-4">A simple, stylish CLI for chatting with local Ollama models. Quick prompts, interactive chat, streaming responses — all in your terminal.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="tag">Node.js</span>
                    <span class="tag">Ollama</span>
                    <span class="tag">CLI</span>
                </div>
            </div>

            <div class="flex flex-col gap-y-24">
                <!-- Features -->
                <div class="animate-slide-up delay-600">
                    <h2 class="text-xl font-semibold text-white mb-6">Features</h2>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Quick one-shot prompts from the command line</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Interactive chat sessions with history</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Streaming responses with live output</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Model switching on the fly</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Pull new models directly from the CLI</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Beautiful ASCII art and colored output</span>
                        </li>
                    </ul>
                </div>

                <!-- Commands -->
                <div class="animate-slide-up delay-700">
                    <h2 class="text-xl font-semibold text-white mb-6">Commands</h2>
                    <div class="space-y-4">
                        <div class="flex flex-col sm:flex-row sm:items-start gap-2 sm:gap-4">
                            <code class="text-emerald-400 font-mono text-sm bg-white/5 px-2 py-1 rounded shrink-0">miyu "Your prompt"</code>
                            <span class="text-subtle text-sm">Quick one-shot prompt</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-start gap-2 sm:gap-4">
                            <code class="text-emerald-400 font-mono text-sm bg-white/5 px-2 py-1 rounded shrink-0">miyu chat</code>
                            <span class="text-subtle text-sm">Start interactive chat session</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-start gap-2 sm:gap-4">
                            <code class="text-emerald-400 font-mono text-sm bg-white/5 px-2 py-1 rounded shrink-0">miyu chat -m mistral</code>
                            <span class="text-subtle text-sm">Chat with a specific model</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-start gap-2 sm:gap-4">
                            <code class="text-emerald-400 font-mono text-sm bg-white/5 px-2 py-1 rounded shrink-0">miyu models</code>
                            <span class="text-subtle text-sm">List installed Ollama models</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-start gap-2 sm:gap-4">
                            <code class="text-emerald-400 font-mono text-sm bg-white/5 px-2 py-1 rounded shrink-0">miyu pull llama3.2</code>
                            <span class="text-subtle text-sm">Download a new model</span>
                        </div>
                    </div>
                </div>

                <!-- How it works -->
                <div class="animate-slide-up delay-800">
                    <h2 class="text-xl font-semibold text-white mb-6">How It Works</h2>
                    <p class="text-muted leading-relaxed">Miyu connects to your local Ollama instance and provides a friendly interface for chatting with LLMs. Run quick prompts or start an interactive session — responses stream in real-time with a clean, colorful terminal UI.</p>
                </div>

                <!-- Tech Stack -->
                <div class="animate-slide-up delay-900">
                    <h2 class="text-xl font-semibold text-white mb-6">Tech Stack</h2>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="/icons/tech/nodedotjs.svg" alt="Node.js" class="w-4 h-4">
                                Node.js
                            </h3>
                            <p class="text-sm text-subtle">JavaScript runtime for the CLI</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1 flex items-center gap-2">
                                <img src="/icons/tech/ollama.svg" alt="Ollama" class="w-4 h-4">
                                Ollama
                            </h3>
                            <p class="text-sm text-subtle">Local LLM inference engine</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1">Commander</h3>
                            <p class="text-sm text-subtle">CLI framework for commands and options</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1">Chalk + Ora</h3>
                            <p class="text-sm text-subtle">Colorful output and spinners</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>

</x-layout>
