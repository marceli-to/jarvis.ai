@props([
    'image' => '',
    'alt' => '',
    'title' => '',
    'description' => '',
    'link' => '',
    'linkText' => 'Visit site'
])

<div class="group relative">
    <div class="relative overflow-hidden rounded-xl border border-white/[0.08] bg-white/[0.02] p-2">
        <div class="relative rounded-lg overflow-hidden">
            <img 
                src="{{ $image }}" 
                alt="{{ $alt }}" 
                class="w-full h-auto transition-opacity duration-300 group-hover:opacity-0"
                loading="lazy"
            >
            <div class="absolute inset-0 bg-gray-950/50 pointer-events-none transition-opacity duration-300 group-hover:opacity-0"></div>
            <div class="absolute inset-0 flex items-center justify-center p-8 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <div class="text-center max-w-lg">
                    @if($title)
                        <h3 class="text-white text-xl font-semibold mb-4">{{ $title }}</h3>
                    @endif
                    <p class="text-white/90 text-lg leading-relaxed mb-8">{{ $description }}</p>
                    @if($link)
                        <a href="{{ $link }}" target="_blank" rel="noopener noreferrer" class="group/btn inline-flex items-center gap-2 px-4 py-2 rounded-full bg-emerald-500/10 border border-emerald-500 text-emerald-400 hover:bg-emerald-500/15 transition-all">
                            {{ $linkText }}
                            <i class="ph ph-arrow-right transition-transform duration-200 group-hover/btn:translate-x-1" aria-hidden="true"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
