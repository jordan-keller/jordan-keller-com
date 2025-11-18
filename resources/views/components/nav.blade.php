<div class="flex h-full w-full flex-col">


    <div class="flex-shrink-0 my-auto">
        <!-- Accordion Button -->
        <button
            id="menuToggle"
            class="sticky top-0 z-100 w-full cursor-pointer p-1 text-center font-header text-lg tracking-tight uppercase lg:hidden font-semibold flex-grow"
            onclick="document.getElementById('navLinks').classList.toggle('hidden')"
        >
            Menu
        </button>

        <!-- Navigation links -->
        <div
            id="navLinks"
            class="flex hidden flex-col justify-between lg:flex text-[var(--color-nav)]"
        >
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/blog" :active="request()->is('blog')">Blog</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
        </div>
    </div>
        <!--
    <img
        src="/images/jordan-keller-headshot.jpg"
        alt="Jordan Keller"
        class="opacity-40 min-h-0 w-full flex-grow object-cover object-[60%_40%] lg:object-[70%_30%] mix-blend-soft-light"
    />
    -->
</div>
