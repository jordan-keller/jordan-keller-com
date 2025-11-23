<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>
    @if(request()->is('/') || $heading === 'Hi, I\'m Jordan Keller' || $heading === 'Jordan-Keller.com')
        Redshift
    @else
        {{ $heading }} | theokaylakes.com
    @endif
</title>
    <meta name="description" content="{{ $description ?? 'The Okay Lakes' }}">
    <meta name="author" content="Jordan Keller">
    
    <!-- Open Graph / Social Media -->
    <meta property="og:title" content="The Okay Lakes">
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
  <div 
    class="fixed inset-0 -z-10 bg-cover bg-center opacity-70"
    style="background-image: url('/images/layout_bg.jpg');"
  ></div>



<section class="w-screen h-auto">
    <div class="flex flex-col w-full mx-auto mt-6 lg:mt-12">
       <a href="href="/" :active="request()->is('/')">
        <img
          src="/images/logo_the-okay-lakes.png"
          alt="The Okay Lakes Logo"
          width="300"
          height="80"
          class="object-contain max-w-[300px] mx-auto py-1"
          loading="eager"
        />
      
        <img
          src="/images/logo_redshift.png"
          alt="Redshift Logo"
          width="400"
          height="80"
          class="object-contain w-full max-w-[420px] mx-auto py-1"
          loading="eager"
        />
         </a>
    </div>
</section>

        <nav class="w-full p-0 my-6">
        <x-nav />
        </nav>

        <main class="flex-1 w-full max-w-5/6 mx-auto">
        {{ $slot }}
        </main>

    <footer class="w-full py-4 px-4 mt-auto">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4">
            <ul class="flex flex-wrap gap-4">
                <li class="text-left">&copy;2024 Jordan Keller <br /> All rights reserved.</li>
                <li><a href="mailto:hi@jordan-keller.com">hi@jordan-keller.com</a></li>
                <li><a href="https://www.instagram.com/theokaylakes">Instagram</a></li>
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

