/* global GravConfig */

// Webpack
const webpack = require('webpack')
const WebpackConfig = require(`../webpack.config`)

// Tools libraries
const opn = require('opn')

// PROD SCRIPT
// ––––––––––––––––––––––

// Define prod compiler
const prodCompiler = webpack(WebpackConfig)

// Build Callback
const buildCallback = (error, stats) => {
  // Handle errors
  if (error) throw error

  // Output build info in the console
  process.stdout.write(
    `${stats.toString({
      colors: true,
      modules: false,
      children: false,
      chunks: false,
      chunkModules: false,
      entrypoints: false,
      version: false,
      hash: false,
      timings: false,
      excludeAssets: [/\.map$/]
    })}\n`
  )

  // Open website on local server if enabled
  if (GravConfig.openWebsite) opn(GravConfig.proxy)

  // Open Jarvis if enabled
  if (GravConfig.openJarvis) opn(`http://localhost:${GravConfig.jarvisPort}`)

  // Kill node process if BundleAnalyzer and Jarvis are not enabled
  if (!GravConfig.openBundleAnalyzer && !GravConfig.openJarvis) process.exit()
}

// Init Webpack build process
module.exports = () => prodCompiler.run(buildCallback)
