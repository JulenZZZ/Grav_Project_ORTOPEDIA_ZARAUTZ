// Configurations
const modeConfig = require('./config/mode')
const performanceConfig = require('./config/performance')
const optimizationConfig = require('./config/optimization')
const devtoolConfig = require('./config/devtool')
const entryConfig = require('./config/entry')
const outputConfig = require('./config/ouput')
const resolveConfig = require('./config/resolve')
const modulesConfig = require('./config/modules')
const pluginsConfig = require('./config/plugins')

// WEBPACK CONFIG
// ––––––––––––––––––––––

const WebpackConfig = {
  // Webpack mode configuration
  mode: modeConfig(),

  // Performance configuration
  performance: performanceConfig(),

  // Optimization configuration
  optimization: optimizationConfig(),

  // Source maps configuration
  devtool: devtoolConfig(),

  // Entry configuration
  entry: entryConfig(),

  // Output configuration
  output: outputConfig(),

  // Resole configuration
  resolve: resolveConfig(),

  // Modules configuration
  module: modulesConfig(),

  // Plugins configuration
  plugins: pluginsConfig()
}

module.exports = WebpackConfig
