/* global GravConfig */

// DEVTOOL CONFIG
// ––––––––––––––––––––––

module.exports = () => {
  const devtool = GravConfig.dev ? GravConfig.devSourceMaps : GravConfig.prodSourceMaps

  return devtool
}
