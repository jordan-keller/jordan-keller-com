<x-layout>
    <x-slot:heading>{{ $lyric['title'] }}</x-slot>
  <div 
    class="fixed inset-0 -z-10 bg-cover bg-center"
    style="background-image: url('{{ $lyric['image'] }}');"
  ></div>
    <div 
    class="fixed inset-0 -z-5 bg-black/35"
  ></div>

    <article class="max-w-auto">
        <div class="mb-3">
            <p class="text-2xl">{{ $lyric['title'] }}</p>
            <p class="opacity-50">
            </p>


        <div class="prose max-w-none text-shadow-lg/60 gradient-l-to-r">
{!! \Illuminate\Support\Str::markdown($lyric['body']) !!}
        </div>
    </article>
</x-layout>