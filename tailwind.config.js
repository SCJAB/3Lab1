/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}"],
  theme: {
    colors: {
      'Drab':'#242501',
      'DesertSand': '#E9C6A2',
      'Cafe': '#5A452C',
      'Butterscotch': '#DF984B'},
    extend: {},
  },
  plugins: [
    require('tailwind-scrollbar-hide')
  ],
}

