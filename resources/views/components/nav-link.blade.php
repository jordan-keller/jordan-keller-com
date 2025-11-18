@props(['active' => false])

<a
    class="{{ $active ? 'text-[var(--color-text-2)]' : 'text-[var(--color-nav)]' }} group w-auto uppercase text-center lg:text-right lg:mx-3"
    aria-current="{{ $active ? 'page' : 'false' }}"
    {{ $attributes }}
>
    {{ $slot }}
</a>
