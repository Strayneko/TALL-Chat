/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#FAAE2B',
        secondary: '#00473E',
        third: '#475D5B',
      },
      fontFamily: {
        sans: ['inter']
      },
      container: {
        center: true,
        screens: {
          DEFAULT: '360px',
        }
      }
    },
  },
  plugins: [],
}