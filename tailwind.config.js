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
          // sans: ['Roboto', 'Helvetica', 'Arial', 'sans-serif'],
          // serif: ['Merriweather', 'serif'],
          // mono: ['Source Code Pro', 'monospace'],

            sans: ['Poppins', ...defaultTheme.fontFamily.sans],
        },
      },
    },
    darkMode: 'class',
    plugins: [],
  };
