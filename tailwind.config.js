/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
                'theme-bg-1': 'var(--color-bg-1)',
                'theme-bg-2': 'var(--color-bg-2)',
                'theme-bg-3': 'var(--color-bg-3)',
                'theme-text-1': 'var(--color-text-1)',
                'theme-text-2': 'var(--color-text-2)',
            },
            
      backgroundImage: {
        '35mm': "url('/images/35mm.jpg')",
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}