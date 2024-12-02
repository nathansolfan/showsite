/** @type {import('tailwindcss').Config} */
export default {
    content: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
    ],
    theme: {
      extend: {
        fontFamily: {
          sans: ['Roboto', 'Helvetica', 'Arial', 'sans-serif'], // Add your custom font here
          serif: ['Merriweather', 'serif'], // Optional serif font
          mono: ['Source Code Pro', 'monospace'], // Optional monospace font
        },
      },
    },
    darkMode: 'class',
    plugins: [],
  };
