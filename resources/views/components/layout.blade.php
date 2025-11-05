<html lang="en" class="h-screen w-5/6 md:w-4/6 lg:w-5/6 justify-center mx-auto md:p-4 lg:p-2 my-6">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jordan Keller's {{ $heading }} Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen flex flex-col lg:flex-row space-y-2 lg:space-y-0 lg:space-x-4">

    <nav class="text-blue-300 ovelrine mx-auto lg:mx-2 w-full lg:w-1/6 p-4 border-dashed border-black border-1">
        <!-- Menu toggle button - visible only on small screens -->
        <button 
            id="menuToggle" 
            class="w-full lg:hidden text-center font-semibold hover:bg-blue-100 p-2"
            onclick="document.getElementById('navLinks').classList.toggle('hidden')"
        >
        Navigate
        </button>
        
        <!-- Navigation links -->
        <div id="navLinks" class="flex-col hidden flex lg:flex justify-between items-left">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>     
            <x-nav-link href="/blogs" :active="request()->is('blog')">Blog</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
        </div>
    </nav>

    <main class="h-full mx-auto space-y-2 border-dashed border-1 p-6 lg:w-5/6 w-full font-mono">
        {{ $slot }}
    </main>


</body>
</html>