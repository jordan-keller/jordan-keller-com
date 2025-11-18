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
        
</body>
</html>