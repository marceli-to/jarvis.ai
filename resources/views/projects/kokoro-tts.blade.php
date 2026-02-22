<x-layout :hideNav="true" title="Kokoro TTS – Jarvis" description="Local text-to-speech in 9 languages. No API key, no internet — just fast, private voice synthesis from your terminal.">

    <!-- Back link -->
    <div class="sticky top-0 z-50 pt-2">
        <div class="max-w-4xl mx-auto px-6 h-[var(--header-height)] flex items-center justify-between">
            <a href="/#tools" class="inline-flex items-center gap-2 text-sm text-muted hover:text-white transition-colors" aria-label="Back to tools">
                <i class="ph ph-arrow-left" aria-hidden="true"></i>
                Back to tools
            </a>
            <a href="https://github.com/thewh1teagle/kokoro-onnx" target="_blank" rel="noopener noreferrer" class="badge badge-gradient transition-all group" aria-label="View Kokoro ONNX on GitHub">
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
                    <h1 class="heading-lg">Kokoro TTS</h1>
                    <span class="badge badge-success">
                        <span class="status-dot status-dot-online"></span>
                        Live
                    </span>
                </div>
                <p class="text-xl text-muted leading-relaxed mb-4">Local text-to-speech in 9 languages. No API key, no internet after setup — fast, private voice synthesis straight from the terminal.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="tag">Python</span>
                    <span class="tag">ONNX</span>
                    <span class="tag">CLI</span>
                    <span class="tag">Local AI</span>
                </div>
            </div>

            <div class="flex flex-col gap-y-24">

                <!-- Features -->
                <div class="animate-slide-up delay-600">
                    <h2 class="text-xl font-semibold text-white mb-6">Features</h2>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Runs entirely locally — no API key, no cloud, no rate limits</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">9 languages: English, French, Spanish, Italian, Portuguese, Hindi, Japanese, Mandarin</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">29 voices — male and female variants per language</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Plays immediately or saves to WAV file</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Persistent language preference — set once, use everywhere</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="ph ph-check-circle text-emerald-400 mt-0.5" aria-hidden="true"></i>
                            <span class="text-muted">Fast — ~200–500ms per sentence on Apple Silicon</span>
                        </li>
                    </ul>
                </div>

                <!-- Commands -->
                <div class="animate-slide-up delay-700">
                    <h2 class="text-xl font-semibold text-white mb-6">Usage</h2>
                    <div class="space-y-4">
                        <div class="flex flex-col sm:flex-row sm:items-start gap-2 sm:gap-4">
                            <code class="text-emerald-400 font-mono text-sm bg-white/5 px-2 py-1 rounded shrink-0">tts "Hello world"</code>
                            <span class="text-subtle text-sm">Speak text immediately</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-start gap-2 sm:gap-4">
                            <code class="text-emerald-400 font-mono text-sm bg-white/5 px-2 py-1 rounded shrink-0">tts --lang fr</code>
                            <span class="text-subtle text-sm">Switch to French (saved permanently)</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-start gap-2 sm:gap-4">
                            <code class="text-emerald-400 font-mono text-sm bg-white/5 px-2 py-1 rounded shrink-0">tts "Bonjour!"</code>
                            <span class="text-subtle text-sm">Now speaks in French</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-start gap-2 sm:gap-4">
                            <code class="text-emerald-400 font-mono text-sm bg-white/5 px-2 py-1 rounded shrink-0">tts --save out.wav "Hello"</code>
                            <span class="text-subtle text-sm">Save to file instead of playing</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-start gap-2 sm:gap-4">
                            <code class="text-emerald-400 font-mono text-sm bg-white/5 px-2 py-1 rounded shrink-0">tts -v bf_emma "Hello"</code>
                            <span class="text-subtle text-sm">Use a specific voice</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-start gap-2 sm:gap-4">
                            <code class="text-emerald-400 font-mono text-sm bg-white/5 px-2 py-1 rounded shrink-0">tts --list-voices</code>
                            <span class="text-subtle text-sm">Show all 29 voices grouped by language</span>
                        </div>
                        <div class="flex flex-col sm:flex-row sm:items-start gap-2 sm:gap-4">
                            <code class="text-emerald-400 font-mono text-sm bg-white/5 px-2 py-1 rounded shrink-0">echo "from a pipe" | tts</code>
                            <span class="text-subtle text-sm">Read from stdin</span>
                        </div>
                    </div>
                </div>

                <!-- Languages -->
                <div class="animate-slide-up delay-750">
                    <h2 class="text-xl font-semibold text-white mb-6">Languages</h2>
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-3">
                        @foreach ([
                            ['🇺🇸', 'American English', '11 voices'],
                            ['🇬🇧', 'British English', '4 voices'],
                            ['🇫🇷', 'French', '1 voice'],
                            ['🇪🇸', 'Spanish', '2 voices'],
                            ['🇮🇹', 'Italian', '2 voices'],
                            ['🇧🇷', 'Portuguese', '2 voices'],
                            ['🇮🇳', 'Hindi', '2 voices'],
                            ['🇯🇵', 'Japanese', '3 voices'],
                            ['🇨🇳', 'Mandarin', '2 voices'],
                        ] as [$flag, $lang, $count])
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06] flex items-center gap-3">
                            <span class="text-2xl">{{ $flag }}</span>
                            <div>
                                <div class="text-white text-sm font-medium">{{ $lang }}</div>
                                <div class="text-subtle text-xs">{{ $count }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- How it works -->
                <div class="animate-slide-up delay-800">
                    <h2 class="text-xl font-semibold text-white mb-6">How It Works</h2>
                    <p class="text-muted leading-relaxed">Kokoro TTS uses the Kokoro v1.0 ONNX model — a compact 82M parameter neural TTS system that runs on CPU with near real-time performance on Apple Silicon. The model is downloaded once (~300MB) and cached locally. All synthesis happens on-device with no network calls.</p>
                </div>

                <!-- Tech Stack -->
                <div class="animate-slide-up delay-900">
                    <h2 class="text-xl font-semibold text-white mb-6">Tech Stack</h2>
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1">Kokoro ONNX</h3>
                            <p class="text-sm text-subtle">82M parameter neural TTS model</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1">ONNX Runtime</h3>
                            <p class="text-sm text-subtle">Fast CPU inference, no GPU required</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1">Python + NumPy</h3>
                            <p class="text-sm text-subtle">Audio processing and CLI</p>
                        </div>
                        <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                            <h3 class="text-white mb-1">afplay (macOS)</h3>
                            <p class="text-sm text-subtle">System audio playback, no dependencies</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

</x-layout>
