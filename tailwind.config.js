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
        'chathams-blue': {
          '50': '#f0faff',
          '100': '#dff4ff',
          '200': '#b8ebff',
          '300': '#7adcff',
          '400': '#33cbfd',
          '500': '#08b5ef',
          '600': '#0092cc',
          '700': '#0074a5',
          '800': '#046288',
          '900': '#094d6b',
          '950': '#06334b',
        },
      },
    },
  },
  plugins: [],
}
