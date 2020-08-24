module.exports = {
  purge: [],
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [ require('tailwindcss')('./tailwindcss-config.js'),
  require ('autoprefixer'),
]
}
