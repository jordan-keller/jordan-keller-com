<x-layout>
    <x-slot:heading>{{ $blog['title'] }}</x-slot:heading>

    <article class="max-w-4xl mx-auto">
        <div class="mb-6">
            <p class="text-black text-4xl">By {{ $blog['title'] }} </p>
            <p class="text-gray-600">By {{ $blog['author'] }} on {{ $blog['date'] }}</p>
            
            @if(!empty($blog['tags']))
                <div class="flex gap-2 mt-2">
                    @foreach($blog['tags'] as $tag)
                        <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                            {{ $tag }}
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