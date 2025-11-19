<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jordan Keller: {{ $heading }}</title>
    <meta name="description" content="{{ $description ?? 'I\'m Jordan Keller. I\'m a writer, musician, music/video producer, filmmaker in Grand Rapids, Michigan.' }}">
    <meta name="author" content="Jordan Keller">
    
    <!-- Open Graph / Social Media -->
    <meta property="og:title" content="Hi. I'm Jordan Keller.">
    <meta property="og:description" content="{{ $description ?? 'A writer, musician, music/video producer, filmmaker in Grand Rapids, MI.' }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <!-- Add this when you have a social image: <meta property="og:image" content="{{ asset('images/social-preview.jpg') }}"> -->
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col min-h-screen">    
    <div class="flex flex-col lg:flex-row flex-1 my-6">
         <main class="w-full lg:w-5/6 px-4 mt-6 lg:mt-[5%] lg:mx-[5%] order-2 lg:order-2">
            <h1 class="my-6">{{ $heading }}</h1>
            <div class="text-md space-y-4">{{ $slot }}</div>
        </main>

        <nav class="bg-[var(--color-bg-1)] w-1/6 h-auto lg:h-screen lg:max-h-screen sticky top-0 self-start z-50 pb-1 overflow-hidden lg:order-2">
            <x-nav />
        </nav>
    </div>

    <footer class="w-full py-4 px-4 mt-auto">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4">
            <ul class="flex flex-wrap gap-4">
                <li class="text-left">&copy;2024 Jordan Keller <br /> All rights reserved.</li>
                <li><a href="mailto:hi@jordan-keller.com">hi@jordan-keller.com</a></li>
                <li><a href="https://bsky.app/profile/jordan-keller.com">Bluesky</a></li>
                <li><a href="https://letterboxd.com/jordanmkeller/">Letterboxd</a></li>
                <li><a href="https://www.linkedin.com/in/jordan-m-keller/">Linkedin</a></li>
            </ul>
           
            <div>
                <a id="theme-switcher" class="cursor-pointer text-[var(--color-text-2)]/50 hover:text-[var(--color-text-2)] text-xs">
                    lights out
                </a>
            </div>
            
        </div>
    </footer>
    
</body>
</html>

