<?php
namespace Grav\Plugin\Webpacker;

use Grav\Common\Grav;

/**
 * [add webpack assets]
 *
 * [add hard builded assets if prod and or server dynamic builded assets if dev ]
 *
 * Class WebpackAssets
 * @package Grav\Plugin
 * @license MIT License by jimblue
 */
class WebpackAssets
{

  /**
   * Environment-configuration
   * @var string
   */
  protected $mode;
  protected $locator;

  /**
   * Instantiate WebpackAssets class
   */
  public function __construct()
  {
    $this->mode = Grav::instance()['config']['plugins.webpacker.mode'];
    $this->locator = Grav::instance()['locator'];
    $this->assets = Grav::instance()['assets'];
    $this->language = Grav::instance()['language'];
  }

  /**
   * Webpack assets function
   * @param string $asset
   * @param  int     $priority the priority, bigger comes first
   * @param  bool    $pipeline false if this should not be pipelined
   * @param  string  $group name of the group
   * @param  string  $loading how the asset is loaded (async/defer/inline)
   * @return string
   *
   * @throws RuntimeException
   */
  public function add($asset, $priority, $pipeline, $loading, $group)
  {
    // Grav Instances
    $mode = $this->mode;
    $locator = $this->locator;
    $assets = $this->assets;
    $language = $this->language;

    // Files infos
    $pathInfo = pathinfo($asset);
    $fileName = $pathInfo['filename'];
    $baseName = $pathInfo['basename'];

    // Error title
    $errorTitle = 'Webpacker Plugin: ';

    // Webpacker Json file
    $webpackerJson = 'webpacker.json';

    // Check if file extension exist
    if (isset($pathInfo['extension'])) {
      $fileExt = $pathInfo['extension'];

      // Check if file extension is CSS or JS
      if ($fileExt === 'css' || $fileExt === 'js') {

        // Check if mode is development
        if ($mode === 'development') {
          // Asset path
          $assetRelPath = "/assets/js/{$fileName}.js";
          $assetAbsPath = $assetRelPath;

          // Overwrite settings for development
          $priority = null;
          $pipeline = false;
          $loading = $fileName === 'manifest' || $fileName === 'vendors' || $fileName === 'commons' ? null : 'defer';
          $group = null;

          // Add JS
          $assets->addJs($assetAbsPath, $priority, $pipeline, $loading, $group);

        // Check if mode is production
        } elseif ($mode === 'production') {
          $webpackAssets = $locator->findResource("theme://assets/{$webpackerJson}", true);

          // Check if wepack-assets.json exist
          if (file_exists($webpackAssets)) {
            // Array of assets paths from wepack-assets.json
            $assetsArray = json_decode(file_get_contents($webpackAssets), true);

            // Check if file is vendors or commons
            if ($baseName === 'vendors.js' || $baseName === 'commons.js') {
              // Stop here if file is not in wepack-assets.json index
              if (!array_key_exists($baseName, $assetsArray)) return;
            }

            // Asset path
            $assetRelPath = $assetsArray[$baseName];
            $assetAbsPath = GRAV_ROOT . $assetRelPath;

            // Check if the file exist
            if (file_exists($assetAbsPath)) {

              // Check if file extension is CSS
              if ($fileExt === 'css') {
                // Add CSS
                $assets->addCss($assetRelPath, $priority, $pipeline, $group, $loading);

              // Check if file extension is JS
              } elseif ($fileExt === 'js') {
                // Add JS
                $assets->addJs($assetRelPath, $priority, $pipeline, $loading, $group);
              }

            // Trow missing file error
            } else {
              throw new \RuntimeException($errorTitle . $asset . ' ' . $language->translate('PLUGIN_WEBPACKER.ERRORS.MISSING_FILE'));
            }

          // Trow missing wepack-assets.json error
          } else {
            throw new \RuntimeException($errorTitle . $webpackerJson . ' ' . $language->translate('PLUGIN_WEBPACKER.ERRORS.MISSING_JSON'));
          }
        }

      // Trow wrong extension error
      } else {
        throw new \RuntimeException($errorTitle . $asset . ' ' . $language->translate('PLUGIN_WEBPACKER.ERRORS.WRONG_EXTENSION'));
      }

    // Trow missing extension error
    } else {
      throw new \RuntimeException($errorTitle . $asset . ' ' . $language->translate('PLUGIN_WEBPACKER.ERRORS.MISSING_EXTENSION'));
    }
  }
}
