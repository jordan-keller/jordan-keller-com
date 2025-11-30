<x-layout>
    <x-slot:heading>Videos</x-slot:heading>

    <div class="max-w-4xl mx-auto space-y-8">
        @foreach($videos as $video)
        <div>
            <h3 class="text-2xl font-normal mb-4 text-center">{{ $video['title'] }}</h3>
            <div class="w-5/6 mx-auto">
                <div class="aspect-video"> 
                    <iframe 
                        class="w-full h-full rounded-lg shadow-lg object-contain"
                        src="https://www.youtube.com/embed/{{ $video['youtube_id'] }}"
                        title="{{ $video['title'] }}"
                        frameborder="0"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>