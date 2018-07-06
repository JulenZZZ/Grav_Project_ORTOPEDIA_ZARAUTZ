/* global GravConfig */

// OUTPUT CONFIG
// ––––––––––––––––––––––

module.exports = () => {
  const output = {
    path: GravConfig.outputPath,
    filename: GravConfig.dev ? 'js/[name].js' : 'js/[name].[hash].js',
    publicPath: GravConfig.dev ? '/assets/' : GravConfig.publicPath
  }

  return output
}
