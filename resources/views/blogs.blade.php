<x-layout>
  <x-slot:heading>Blogs</x-slot:heading>
  <x-slot:subheading>Blogs</x-slot:subheading>

   <div>

   @foreach ($blogs as $blog)
   <a href="/blogs/{{ $blog['id'] }}">
   <div class="mb-6 p-4">  
        <div class="text-base italic mb-2">"{{ $blog['text']  }}"</div>
        <div class="text-xs mb-2">– {{ $blog['excerpt'] }}, <em>{{ $blog['excerpt'] }}</em></div>
    <span class="text-sm text-gray-500">
      @foreach ($blog['tags'] as $tag)
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $tag }}</span>
    </a>
        @endforeach
   </div>

   @endforeach

</div>

</x-layout> 