@props(['language' => null, 'filename' => null])

<div {{ $attributes->merge(['class' => 'rounded-lg overflow-hidden text-sm bg-white/[0.03] border border-white/[0.08]']) }}>
    @if($language || $filename)
        <div class="flex items-center justify-between px-4 py-2 text-xs text-gray-500 bg-white/[0.02] border-b border-white/[0.08]">
            <span>{{ $filename ?? $language }}</span>
            @if($filename && $language)
                <span>{{ $language }}</span>
            @endif
        </div>
    @endif
    <div class="p-4 overflow-x-auto">
        <pre><code class="font-mono text-gray-300">{{ $slot }}</code></pre>
    </div>
</div>
