const mqpacker = require('css-mqpacker')
const sortCSSmq = require('sort-css-media-queries')
const cssnext = require('postcss-cssnext')
const cssnano = require('cssnano')

module.exports = {
  plugins: [
    mqpacker({
      sort: sortCSSmq
    }),
    cssnext({
      features: {
        customProperties: {
          warnings: false
        }
      }
    }),
    cssnano()
  ]
}
