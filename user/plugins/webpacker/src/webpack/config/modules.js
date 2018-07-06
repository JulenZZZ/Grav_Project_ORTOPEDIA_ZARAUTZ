/* global GravConfig */

// Modules libraries
const MiniCssExtractLoader = require('mini-css-extract-plugin').loader

// MODULES CONFIG
// ––––––––––––––––––––––

module.exports = () => {
  const modules = {
    rules: [
      // JAVASCRIPT linter (using ESLINT)
      {
        test: /\.js$/,
        enforce: 'pre',
        exclude: /(node_modules|bower_components)/,
        use: [
          {
            loader: 'eslint-loader',
            options: {
              emitWarning: true
            }
          }
        ]
      },

      // JAVASCRIPT loader (using BABEL)
      {
        test: /\.js$/,
        exclude: /(node_modules|bower_components)/,
        use: [
          {
            loader: 'babel-loader',
            options: {
              cacheDirectory: true
            }
          }
        ]
      },
      // STYLE loader (using SASS and POSTCSS)
      {
        test: /\.(scss|sass|css)$/,
        use: [
          {
            loader: GravConfig.prod ? MiniCssExtractLoader : 'style-loader'
          },
          {
            loader: 'css-loader',
            options: {
              sourceMap: true,
              importLoaders: 2
            }
          },
          {
            loader: 'postcss-loader',
            options: {
              sourceMap: true
            }
          },
          {
            loader: 'resolve-url-loader'
          },
          {
            loader: 'sass-loader',
            options: {
              sourceMap: true,
              attempts: 1
            }
          }
        ]
      },
      // IMAGE loader
      {
        test: /\.(png|jpg|jpeg|gif|svg)$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: GravConfig.dev ? 'images/[name].[ext]' : 'images/[name].[hash].[ext]'
            }
          },
          {
            loader: 'image-webpack-loader',
            options: {
              enabled: GravConfig.prod,
              bypassOnDebug: true
            }
          }
        ]
      },
      // FONT loader
      {
        test: /\.(woff|woff2|eot|ttf)$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: GravConfig.dev ? 'fonts/[name].[ext]' : 'fonts/[name].[hash].[ext]'
            }
          }
        ]
      }
    ]
  }

  return modules
}
