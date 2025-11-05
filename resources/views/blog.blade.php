<x-layout>
    <x-slot:heading>Blog</x-slot:heading>
    <x-slot:subheading>All Posts</x-slot:subheading>

    <div class="max-w-4xl mx-auto">
        
        {{-- Tag Filter --}}
        @if($allTags->isNotEmpty())
            <div class="mb-8">
                <h3 class="text-sm font-semibold text-gray-700 mb-3">Filter by tag:</h3>
                <div class="flex flex-wrap gap-2">
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

        {{-- Blog Posts List --}}
        @if(count($blogs) > 0)
            <div class="space-y-6">
                @foreach($blogs as $blog)
                    <a href="{{ route('blog.show', $blog['slug']) }}" 
                       class="block p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                        
                        <h2 class="text-2xl font-bold text-gray-900 mb-2">{{ $blog['title'] }}</h2>
                        
                        <div class="text-sm text-gray-600 mb-3">
                            By {{ $blog['author'] }} 
                            @if($blog['date'])
                                • {{ date('F j, Y', strtotime($blog['date'])) }}
                            @endif
                        </div>

                        <p class="text-gray-700 mb-4">{{ $blog['excerpt'] }}</p>

                        @if(!empty($blog['tags']))
                            <div class="flex flex-wrap gap-2">
                                @foreach($blog['tags'] as $tag)
                                    <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded text-xs">
                                        {{ $tag }}
                                    </span>
                                @endforeach
                            </div>
                        @endif
                    </a>
                @endforeach
            </div>
        @else
            <p class="text-gray-600">No blog posts found{{ $selectedTag ? ' with tag "' . $selectedTag . '"' : '' }}.</p>
        @endif

    </div>
</x-layout>