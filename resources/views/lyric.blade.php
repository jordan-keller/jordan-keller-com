<x-layout>
    <x-slot:heading>Lyrics</x-slot>
    <x-slot:subheading>All Posts</x-slot>

    <div>
       
        @if (count($lyrics) > 0)
            <div class="space-y-6 hover:border-l p-4">
                @foreach ($lyrics as $lyric)
                    <a href="{{ route('lyric.show', $lyric['slug']) }}" class="pl-2 text-[var(--color-text-1)] text:text-[var(--color-nav)]">
                       
                        @if (!empty($lyric['image']))
                            <img 
                                src="{{ $lyric['image'] }}" 
                                alt="{{ $lyric['title'] }} song art (by David Bez)"
                                class="object-cover"
                            />
                        @endif

                        <h2
                            class="mb-2 text-2xl"
                        >
                            {{ $lyric['title'] }}
                        </h2>
                        <p class="mb-4 text-sm transition-colors duration-200 group-hover:text-[var(--color-text-1)]">
                            {{ $lyric['excerpt'] }}
                        </p>

                        @if (! empty($lyric['tags']))
                            <div class="flex flex-wrap gap-2">
                                @foreach ($lyric['tags'] as $tag)
                                    <span class="rounded px-2 py-1 text-xs opacity-80">#{{ $tag }}</span>
                                @endforeach
                            </div>
                        @endif

                        {{-- Syndication Footer --}}
                        @if (! empty($lyric['syndication']))
                            <div class="mt-3 pt-3 flex flex-row justify-between">
                                 <div class="text-sm">
                                    @if ($lyric['date'])
                                        {{ date('F j, Y', strtotime($lyric['date'])) }}
                                    @endif
                                 </div>

                                <div class="flex gap-1 text-xs">
                                    <span>Also posted on:</span>
                                    <div class="flex flex-wrap gap-1">
                                        @foreach ($lyric['syndication'] as $channel)
                                            <span class="text-[var(--color-bg-1)]/70 px-2 py-1 bg-[var(--color-text-1)] mx-1">
                                                {{ $channel }}
                                            </span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                    </a>
                @endforeach
            </div>
        @else
            <p>No lyrics posts found{{ $selectedTag ? ' with tag "' . $selectedTag . '"' : '' }}.</p>
        @endif
    </div>
</x-layout>
