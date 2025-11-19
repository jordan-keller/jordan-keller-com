@props(['active' => false])

<a
    class="{{ $active ? 'text-[var(--color-text-1)] underline underline-offset-4' : 'text-[var(--color-nav)]' }} group w-auto text-left uppercase lg:mx-3 lg:text-right"
    aria-current="{{ $active ? 'page' : 'false' }}"
    {{ $attributes }}
>
    {{ $slot }}
</a>
