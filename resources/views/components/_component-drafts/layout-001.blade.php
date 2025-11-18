<html lang="en" class="mx-auto w-full justify-center md:w-5/6 lg:w-full">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Jordan Keller's {{ $heading }} Page</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="flex min-h-screen flex-col lg:flex-row lg:flex-row-reverse">
        <!-- Nav section - takes exactly half -->
        <div
            class="sticky top-0 z-100 flex w-full flex-col self-start overflow-hidden bg-[var(--color-bg-2)] pb-1 lg:h-screen lg:max-h-screen lg:w-1/2"
        >
            <x-nav />
        </div>

        <main class="text-opacity-20 mt-6 flex-1 px-4 lg:mt-[10%] lg:ml-[5%]">
            <h1 class="mb-6">{{ $heading }}</h1>
            <div class="text-md space-y-4 font-sans">{{ $slot }}</div>
        </main>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const themeBtn = document.getElementById('theme-switcher');
                const html = document.documentElement;
                // Theme persistence with localStorage
                if (localStorage.getItem('theme') === 'dark') {
                    html.classList.add('theme-dark');
                }
                themeBtn?.addEventListener('click', function () {
                    html.classList.toggle('theme-dark');
                    // Save preference
                    if (html.classList.contains('theme-dark')) {
                        localStorage.setItem('theme', 'dark');
                    } else {
                        localStorage.setItem('theme', 'light');
                    }
                });
            });
        </script>
    </body>
</html>
