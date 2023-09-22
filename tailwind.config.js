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
        darkb: "#002233",
        boxbg: '#E5E5E5',
        iconbg: '#222222',
        bgcolor: '#FFFBFB',
        bgboxes: '#E9E5E5',
      },
    },
  },
  plugins: [],
}

