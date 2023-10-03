/** @type {import('tailwindcss').Config} */
// eslint-disable-next-line no-undef
module.exports = {
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/js/**/*.vue',
  ],
  theme: {
    extend: {},
  },
  plugins: [ require('@tailwindcss/forms')],
}

