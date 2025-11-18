<div class="flex h-full w-full flex-col">
         <div class="relative text-right mx-2 my-2">
        <a id="theme-switcher" class="cursor-pointer mx-auto text-xs mt-4 text-[var(--color-text-2)]/50 hover:text-[var(--color-text-1)/100]">
            lights out
        </a>
        </div>

    <div class="flex-shrink-0 my-auto">
        <!-- Accordion Button -->
        <button
            id="menuToggle"
            class="sticky z-100 w-full cursor-pointer p-1 text-center font-header text-lg tracking-tight uppercase lg:hidden font-semibold flex-grow"
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

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const themeBtn = document.getElementById('theme-switcher');
        const html = document.documentElement;
        
        // Function to update theme text
        function updateThemeText() {
            if(html.classList.contains('theme-dark')) {
                themeBtn.textContent = 'lights on';
            } else {
                themeBtn.textContent = 'lights off';
            }
        }
        
        // Theme persistence with localStorage
        if(localStorage.getItem('theme') === 'dark') {
            html.classList.add('theme-dark');
        }
        
        // Set initial text
        updateThemeText();
        
        themeBtn?.addEventListener('click', function() {
            html.classList.toggle('theme-dark');
            
            // Update button text
            updateThemeText();
            
            // Save preference
            if(html.classList.contains('theme-dark')) {
                localStorage.setItem('theme', 'dark');
            } else {
                localStorage.setItem('theme', 'light');
            }
        });
    });
    </script>
    </div>
        <!--
    <img
        src="/images/jordan-keller-headshot.jpg"
        alt="Jordan Keller"
        class="opacity-40 min-h-0 w-full flex-grow object-cover object-[60%_40%] lg:object-[70%_30%] mix-blend-soft-light"
    />
    -->
</div>
