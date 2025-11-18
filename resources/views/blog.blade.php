<x-layout>
    <x-slot:heading>Blog</x-slot>
    <x-slot:subheading>All Posts</x-slot>

    <div class="max-w-auto">
        {{--
            Tag Filter: LEAVE IT OUT FOR NOW
            <div id="blogTags" class="bg-red-900 flex-col hidden flex lg:flex justify-between items-start font-sans font-semibold">
            <div class="flex flex-wrap gap-2 justify-center">
            <a href="{{ route('blog.index') }}"
            class="px-3 py-1 rounded-full text-sm transition {{ !$selectedTag ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
            All
            </a>
            @foreach($allTags as $tag)
            <a href="{{ route('blog.index', ['tag' => $tag]) }}"
            class="px-3 py-1 rounded-full text-sm transition {{ $selectedTag === $tag ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
            {{ $tag }}
            </a>
            @endforeach
            </div>
            </div>
            </div>
            
            @if($allTags->isNotEmpty())
            <div class="my-8 bg-cyan-100/50 p-4 text-center">
            <div class="flex flex-wrap gap-2 justify-center">
            <a href="{{ route('blog.index') }}"
            class="px-3 py-1 rounded-full text-sm transition {{ !$selectedTag ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
            All
            </a>
            @foreach($allTags as $tag)
            <a href="{{ route('blog.index', ['tag' => $tag]) }}"
            class="px-3 py-1 rounded-full text-sm transition {{ $selectedTag === $tag ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
            {{ $tag }}
            </a>
            @endforeach
            </div>
            </div>
            @endif
        --}}

        {{-- Blog Posts List --}}
        @if (count($blogs) > 0)
            <div class="space-y-6">
                @foreach ($blogs as $blog)
                    <a href="{{ route('blog.show', $blog['slug']) }}" class="group ml-2 block border-l-1 border-dashed border-black pl-2">
                        <div
                            class="mb-3 text-sm transition-colors group-hover:text-[var(--color-text-1)]"
                        >
                            @if ($blog['date'])
                                {{ date('F j, Y', strtotime($blog['date'])) }}
                            @endif
                        </div>

                        <h2
                            class="mb-2 text-2xl font-medium transition-colors duration-100 group-hover:text-[var(--color-text-1)]"
                        >
                            {{ $blog['title'] }}
                        </h2>
                        <p
                            class="mb-4 text-sm transition-colors duration-200 group-hover:text-[var(--color-text-1)]"
                        >
                            {{ $blog['excerpt'] }}
                        </p>

                        @if (! empty($blog['tags']))
                            <div class="flex flex-wrap gap-2">
                                @foreach ($blog['tags'] as $tag)
                                    <span class="rounded px-2 py-1 text-xs opacity-80">
                                        #{{ $tag }}
                                    </span>
                                @endforeach
                            </div>
                        @endif

                        {{-- Syndication Footer --}}
                        @if (! empty($blog['syndication']))
                            <div class="mt-3 pt-3">
                                <div class="flex items-center gap-2 text-xs">
                                    <span>Also posted on:</span>
                                    <div class="flex flex-wrap gap-1">
                                        @foreach ($blog['syndication'] as $channel)
                                            <span class="rounded bg-gray-100 px-2 py-1 text-gray-700">
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
            <p>
                No blog posts found{{ $selectedTag ? ' with tag "' . $selectedTag . '"' : '' }}.
            </p>
        @endif
    </div>
</x-layout>
