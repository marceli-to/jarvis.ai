<x-layout :title="$project['title'] . ' – Jarvis'" :description="$project['description']">

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
                        <h1 class="heading-lg">{{ $project['title'] }}</h1>
                        <span class="badge
                            @if($project['status'] === 'Live') badge-success
                            @elseif($project['status'] === 'Beta') text-purple-400
                            @else text-gray-400
                            @endif">
                            @if($project['status'] === 'Live')
                                <span class="status-dot status-dot-online"></span>
                            @endif
                            {{ $project['status'] }}
                        </span>
                    </div>
                    <p class="text-xl text-muted">{{ $project['tagline'] }}</p>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach($project['tags'] as $tag)
                        <span class="tag">{{ $tag }}</span>
                    @endforeach
                </div>
            </div>

            <!-- Description -->
            <div class="mb-16 animate-slide-up delay-75">
                <p class="text-2xl text-muted leading-relaxed mb-8">{{ $project['description'] }}</p>
                <div class="flex items-center gap-3">
                    @if(isset($project['link']))
                        <a href="{{ $project['link'] }}" target="_blank" class="badge badge-gradient transition-all group">
                            Visit website
                            <i class="ph ph-arrow-right transition-transform group-hover:translate-x-0.5"></i>
                        </a>
                    @endif
                    @if(isset($project['github']) && $project['github'])
                        <a href="{{ $project['github'] }}" target="_blank" class="badge badge-gradient transition-all">
                            <i class="ph ph-github-logo"></i>
                            GitHub
                        </a>
                    @endif
                </div>
            </div>

            <div class="flex flex-col space-y-24">
                <!-- Features -->
                <div class="animate-slide-up delay-150">
                    <h2 class="text-xl font-semibold text-white mb-6">Features</h2>
                    <ul class="space-y-3">
                        @if(isset($project['features']) && is_array($project['features']))
                            @foreach($project['features'] as $feature)
                                <li class="flex items-start gap-3">
                                    <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                                    <span class="text-muted">{{ $feature }}</span>
                                </li>
                            @endforeach
                        @else
                            <li class="flex items-start gap-3">
                                <i class="ph ph-check-circle text-emerald-400 mt-0.5"></i>
                                <span class="text-muted">Feature details coming soon</span>
                            </li>
                        @endif
                    </ul>
                </div>

                @if(isset($project['commands']))
                <!-- Commands -->
                <div class="animate-slide-up delay-225">
                    <h2 class="text-xl font-semibold text-white mb-6">Commands</h2>
                    <div class="space-y-4">
                        @foreach($project['commands'] as $cmd => $desc)
                            <div class="flex flex-col sm:flex-row sm:items-start gap-2 sm:gap-4">
                                <code class="text-emerald-400 font-mono text-sm bg-white/5 px-2 py-1 rounded shrink-0">{{ $cmd }}</code>
                                <span class="text-subtle text-sm">{{ $desc }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- How it works -->
                <div class="animate-slide-up delay-300">
                    <h2 class="text-xl font-semibold text-white mb-6">How It Works</h2>
                    <p class="text-muted leading-relaxed">{{ $project['how_it_works'] }}</p>
                </div>

                <!-- Tech Stack -->
                <div class="animate-slide-up delay-375">
                    <h2 class="text-xl font-semibold text-white mb-6">Tech Stack</h2>
                    @php
                        $techIcons = [
                            'laravel' => 'laravel',
                            'livewire' => 'livewire',
                            'mysql' => 'mysql',
                            'tailwind' => 'tailwindcss',
                            'vue' => 'vuedotjs',
                            'node' => 'nodedotjs',
                            'vite' => 'vite',
                            'claude' => 'anthropic',
                            'anthropic' => 'anthropic',
                            'ollama' => 'ollama',
                            'sqlite' => 'sqlite',
                        ];
                    @endphp
                    <div class="grid sm:grid-cols-2 gap-4">
                        @foreach($project['tech'] as $name => $desc)
                            @php
                                $icon = null;
                                $nameLower = strtolower($name);
                                foreach ($techIcons as $key => $slug) {
                                    if (str_contains($nameLower, $key)) {
                                        $icon = $slug;
                                        break;
                                    }
                                }
                            @endphp
                            <div class="bg-white/5 rounded-xl p-4 border border-white/[0.06]">
                                <h3 class="text-white mb-1 @if($icon) flex items-center gap-2 @endif">
                                    @if($icon)
                                        <img src="https://cdn.simpleicons.org/{{ $icon }}/white" alt="{{ $name }}" class="w-4 h-4">
                                    @endif
                                    {{ $name }}
                                </h3>
                                <p class="text-sm text-subtle">{{ $desc }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            
        </div>
    </main>

</x-layout>
