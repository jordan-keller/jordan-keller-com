<div class="flex h-full w-full">
    <div class="flex flex-row justify-between text-[var(--color-nav)] py-3 mx-auto gap-4"
    >
        <x-nav-link href="/lyrics" :active="request()->is('lyrics') || request()->is('lyrics/*')">Lyrics</x-nav-link>   
        <x-nav-link href="/videos" :active="request()->is('videos')">Videos</x-nav-link>     
        <x-nav-link href="/credits" :active="request()->is('credits')">Credits</x-nav-link>   
        <x-nav-link href="/listen" :active="request()->is('listen')">Listen</x-nav-link>     
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
</div>
