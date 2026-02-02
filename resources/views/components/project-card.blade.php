@props([
    'href',
    'title',
    'description',
    'tags' => [],
    'delay' => '0'
])

<a href="{{ $href }}" class="card card-interactive animate-slide-up delay-{{ $delay }}" aria-label="View {{ $title }} project">
    <h3 class="text-white font-semibold text-xl mb-2">{{ $title }}</h3>
    <p class="text-muted text-sm mb-4">{{ $description }}</p>
    <div class="flex flex-wrap gap-1.5">
        @foreach($tags as $tag)
            <span class="tag">{{ $tag }}</span>
        @endforeach
    </div>
</a>
