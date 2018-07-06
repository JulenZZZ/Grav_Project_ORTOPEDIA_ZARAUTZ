/* global GravConfig */

// Tools libraries
const chalk = require('chalk')
const path = require('path')

// WEBPACKER
// ––––––––––––––––––––––

const PluginConfig = require('./gravconfig')

/**
 * @name Webpacker
 * @description A Grav plugin to help theme development with webpack
 *
 * @param {array} Entry files to process with webpack
 * @param {string} Path to Grav USER folder
 */
const webpacker = (entryFiles, userPath) => {
  // Make Grav Configuration global
  global.GravConfig = new PluginConfig(entryFiles, userPath)

  // Make Webpacker path global
  global.WebpackerPath = path.resolve(__dirname)

  // Function to define and log environement
  const environement = environmentName => {
    // Define NODE_ENV
    process.env.NODE_ENV = environmentName

    // Log environement to console
    console.log(`\n${chalk.greenBright(GravConfig.appName.toUpperCase())} ${chalk.whiteBright.bold(`=>`)} ${chalk.yellow.bold(`${environmentName} mode`)}\n`)
  }

  // Initiate Grav Webpacker Plugin
  const init = () => {
    // If mode is development
    if (GravConfig.dev) {
      // Define environement and log it
      environement('development')

      // Run development script
      require('./webpack/script/dev')()
    }

    // If mode is production
    if (GravConfig.prod) {
      // Define environement and log it
      environement('production')

      // Run production script
      require('./webpack/script/prod')()
    }
  }

  return init()
}

module.exports = webpacker
