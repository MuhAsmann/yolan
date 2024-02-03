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
        'primary': '#3FC0A3',
        'secondary': '#F5FCFA',
        'third' : '#8BD9C8',
        'customyellow': '#FFF07A',
        'customblue' : '#49C5F3',
        'customgreen' : '#C1F17E',
        'customred' : '#FF685A'
      },
      fontFamily: {
        'jakarta' : 'Plus Jakarta Sans'
      }
    },
  },
  plugins: [],
}

