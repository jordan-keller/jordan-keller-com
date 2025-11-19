<div class="flex h-full w-full flex-col align-top">
    
    <!-- Header Row -->
    <div class="flex-shrink-0 mt-4 mx-4 flex justify-between">
        <!-- Menu Button -->
        <button
            id="menuToggle"
            class="cursor-pointer text-left font-header text-lg tracking-tight lg:hidden font-semibold"
            onclick="document.getElementById('navLinks').classList.toggle('hidden')"
        >
            Index
        </button>

        <!-- Lights Out - Aligned to right -->

    </div>

    <!-- Navigation Links (separate from header) -->
    <div
        id="navLinks"
        class="flex hidden flex-col justify-between lg:flex text-[var(--color-nav)] mt-2 ml-6"
    >
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/blog" :active="request()->is('blog')">Blog</x-nav-link>     
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
                themeBtn.textContent = 'lights out';
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
