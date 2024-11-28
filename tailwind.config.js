/** @type {import('tailwindcss').Config} */
import defaultTheme from 'tailwindcss/defaultTheme';

export default {
  // Specify the files where Tailwind CSS should look for class names
  content: [
    "./resources/**/*.blade.php",  // For Blade templates
    "./resources/**/*.js",         // For JavaScript files
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      // Extend the default theme with custom values
      fontFamily: {
        sans: ["Inter var", ...defaultTheme.fontFamily.sans], // Custom sans-serif font
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
