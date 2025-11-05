@props(['active'=> false,])

<a class="{{ $active ? 'text-blue-700 hover:bg-blue-200': 'text-blue-300'}} px-2 py-1 text-sm font-medium font-mono uppercase group"
    aria-current="{{ $active ? 'page': 'false'}}"
    {{  $attributes }}
    ><span class="{{ $active ? 'hidden' : 'group-hover:hidden' }}">○</span><span class="{{ $active ? 'inline' : 'hidden group-hover:inline' }}">◉</span> {{ $slot }}</a>