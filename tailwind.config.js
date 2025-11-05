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
        // Light palette
        light1: "#f7fafc", // very light
        light2: "#edf2f7",
        light3: "#e2e8f0",

        // Dark palette
        dark1: "#1a202c", // very dark
        dark2: "#2d3748",
        dark3: "#4a5568",
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