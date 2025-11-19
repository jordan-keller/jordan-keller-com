<x-layout>
    <x-slot:heading>{{ $blog['title'] }}</x-slot>

    <article class="max-w-auto">
        <div class="mb-6">
            <p class="text-2xl opacity-80">{{ $blog['excerpt'] }}</p>
            <p class="opacity-50">
                By {{ $blog['author'] }} 
                @if($blog['date'])
                    on {{ \Carbon\Carbon::parse($blog['date'])->format('F j, Y') }}
                @else
                    on Unknown date
                @endif
            </p>

            @if (! empty($blog['tags']))
                <div class="my-2 flex gap-2">
                    @foreach ($blog['tags'] as $tag)
                        <span class="bg-[var(--color-bg-2)] px-2 py-1 text-xs text-[var(--color-bg-1)]">#{{ $tag }}</span>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="prose prose-lg max-w-none">
            {!! \Illuminate\Support\Str::markdown($blog['body']) !!}
        </div>
    </article>
</x-layout>