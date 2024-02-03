/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/*.php",
    "./app/Views/**/*.php",
    "./app/Views/**/**/*.php"

  ],
  theme: {
    extend: {
      colors:{
        'primary' : '#3FC0A3'
      }
    },
  },
  plugins: [],
}

