<html lang="en" class="w-full justify-center mx-auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jordan Keller's {{ $heading }} Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col lg:flex-row lg:flex-row-reverse min-h-screen">    
    
    <div class="bg-[var(--color-bg-1)] w-full lg:w-1/6 h-auto lg:h-screen lg:max-h-screen sticky top-0 self-start z-100 flex flex-col pb-1 overflow-hidden">
        <x-nav />
    </div>

    <main class="flex-1 px-4 mt-6 lg:mt-[5%] lg:mx-[5%]">
        <h1 class="my-6">{{ $heading }}</h1>
        <div class="text-md space-y-4">{{ $slot }}</div>
    </main>

        <div class="absolute bottom-6 right-6 z-150">
        <a id="theme-switcher" class="cursor-pointer mx-auto text-xs mt-4 text-[var(--color-text-2)] hover:text-white/70">
            lights out
        </a>
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

</body>
</html>