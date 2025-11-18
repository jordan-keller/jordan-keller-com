<x-layout>
    <x-slot:heading>{{ $blog['title'] }}</x-slot>

    <article class="max-w-auto">
        <div class="mb-6">
            <p class="text-2xl">{{ $blog['excerpt'] }}</p>
            <p class="text-gray-600">By {{ $blog['author'] }} on {{ $blog['date'] }}</p>

            @if (! empty($blog['tags']))
                <div class="my-2 flex gap-2">
                    @foreach ($blog['tags'] as $tag)
                        <span class="bg-black px-2 py-1 text-xs text-[var(--color-bg-1)]">
                            #{{ $tag }}
                        </span>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="prose prose-lg max-w-none">
            {!! \Illuminate\Support\Str::markdown($blog['body']) !!}
        </div>
    </article>
</x-layout>
