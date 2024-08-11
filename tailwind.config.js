/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'media', // 'media', // or 'class'
    content: [
      "./node_modules/flowbite/**/*.js",
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.jsx",
      "./resources/**/*.vue"
  ],
  theme: {
    extend: {},
  },
  plugins: [
      require('flowbite/plugin')
  ],
}

