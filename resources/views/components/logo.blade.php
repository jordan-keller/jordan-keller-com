<svg 
    {{ $attributes->merge(['class' => "size-{$size} {$class}"]) }} 
    viewBox="0 0 32 32" 
    fill="none" 
    xmlns="http://www.w3.org/2000/svg"
>
    <!-- Base triangle -->
    <path d="M16 28L6 20L26 20L16 28Z" fill="url(#grad1)" stroke="currentColor" stroke-width="0.5"/>
    
    <!-- Subdivided triangles -->
    <path d="M16 28L11 24L21 24L16 28Z" fill="url(#grad2)" stroke="currentColor" stroke-width="0.3"/>
    <path d="M11 24L6 20L16 24L11 24Z" fill="url(#grad3)" stroke="currentColor" stroke-width="0.3"/>
    <path d="M21 24L16 24L26 20L21 24Z" fill="url(#grad4)" stroke="currentColor" stroke-width="0.3"/>
    
    <!-- Inner triangles -->
    <path d="M16 24L13 22L19 22L16 24Z" fill="url(#grad5)" stroke="currentColor" stroke-width="0.2"/>
    <path d="M13 22L11 24L16 24L13 22Z" fill="url(#grad6)" stroke="currentColor" stroke-width="0.2"/>
    <path d="M19 22L16 24L21 24L19 22Z" fill="url(#grad7)" stroke="currentColor" stroke-width="0.2"/>
    
    <defs>
        <linearGradient id="grad1" x1="16" y1="20" x2="16" y2="28" gradientUnits="userSpaceOnUse">
            <stop stop-color="#6366F1"/>
            <stop offset="1" stop-color="#4338CA"/>
        </linearGradient>
        <linearGradient id="grad2" x1="16" y1="24" x2="16" y2="28" gradientUnits="userSpaceOnUse">
            <stop stop-color="#818CF8"/>
            <stop offset="1" stop-color="#6366F1"/>
        </linearGradient>
        <linearGradient id="grad3" x1="11" y1="20" x2="11" y2="24" gradientUnits="userSpaceOnUse">
            <stop stop-color="#818CF8"/>
            <stop offset="1" stop-color="#6366F1"/>
        </linearGradient>
        <linearGradient id="grad4" x1="21" y1="20" x2="21" y2="24" gradientUnits="userSpaceOnUse">
            <stop stop-color="#818CF8"/>
            <stop offset="1" stop-color="#6366F1"/>
        </linearGradient>
        <linearGradient id="grad5" x1="16" y1="22" x2="16" y2="24" gradientUnits="userSpaceOnUse">
            <stop stop-color="#A5B4FC"/>
            <stop offset="1" stop-color="#818CF8"/>
        </linearGradient>
        <linearGradient id="grad6" x1="13" y1="22" x2="13" y2="24" gradientUnits="userSpaceOnUse">
            <stop stop-color="#A5B4FC"/>
            <stop offset="1" stop-color="#818CF8"/>
        </linearGradient>
        <linearGradient id="grad7" x1="19" y1="22" x2="19" y2="24" gradientUnits="userSpaceOnUse">
            <stop stop-color="#A5B4FC"/>
            <stop offset="1" stop-color="#818CF8"/>
        </linearGradient>
    </defs>
</svg>