module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      borderRadius: {
        xl: '36px',
      }
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
