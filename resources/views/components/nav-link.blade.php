@props(['active' => false])

<a
    class="text-lg uppercase {{ $active ? 'text-[var(--color-text-1)] italic underline underline-offset-9' : 'text-[var(--color-nav)]' }} group w-auto text-left tracking-widest lg:text-right"
    aria-current="{{ $active ? 'page' : 'false' }}"
    {{ $attributes }}
>
    {{ $slot }}
</a> 
