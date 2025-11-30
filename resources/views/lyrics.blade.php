<x-layout>
  <x-slot:heading>Lyrics</x-slot:heading>

  <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-3 p-3">
    @foreach ($lyrics as $lyric)
      <a href="/lyrics/{{ $lyric['slug'] }}" class="block group hover:scale-105 transition-transform">
        <div class="text-center">  
          <img 
            class="h-64 w-64 object-contain mx-auto shadow-md group-hover:shadow-lg transition-shadow" 
            src="{{ $lyric['image'] }}" 
            alt="{{ $lyric['title'] }}"
          />
          <div class="text-base mt-3 font-medium">{{ $lyric['title'] }}</div>
        </div>
      </a>
    @endforeach
  </div>  
</x-layout>