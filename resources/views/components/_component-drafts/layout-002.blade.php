<html lang="en" class="w-full md:w-full lg:w-full justify-center mx-auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jordan Keller's {{ $heading }} Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col lg:flex-row lg:flex-row-reverse min-h-screen">    
    <div class="absolute top-6 right-6 z-150">
        <a id="theme-switcher" class="cursor-pointer mx-auto text-xs mt-4 text-white/15 hover:text-white/70">
                light / dark
            </a>
        </div>
        </div>
    <div class="w-full lg:w-1/3 h-82 lg:h-screen lg:max-h-screen sticky top-0 self-start z-100 flex flex-col bg-[var(--color-bg-2)] pb-1 overflow-hidden">   <x-nav />
    </div>

 <main class="flex-1 px-4 text-opacity-20 mt-6 lg:mt-[10%] lg:mx-[5%]">
     <h1 class="mb-12">{{ $heading }}</h1>
     <div class="text-md font-sans space-y-4">   {{ $slot }}</div>
    </main>
   <script>
document.addEventListener('DOMContentLoaded', function () {
    const themeBtn = document.getElementById('theme-switcher');
    const html = document.documentElement;
    // Theme persistence with localStorage
    if(localStorage.getItem('theme') === 'dark') {
        html.classList.add('theme-dark');
    }
    themeBtn?.addEventListener('click', function() {
        html.classList.toggle('theme-dark');
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