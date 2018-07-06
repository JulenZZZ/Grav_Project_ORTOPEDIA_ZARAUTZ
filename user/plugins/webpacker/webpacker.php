<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use Grav\Plugin\Webpacker\WebpackerTwigExtension;
use Grav\Plugin\Webpacker\WebpackAssets;

/**
 * [Webpacker plugin]
 *
 * [Offer a simple way to include the power of webpack inside Grav]
 *
 * Class WebpackerPlugin
 * @package Grav\Plugin
 * @license MIT License by jimblue
 */
class WebpackerPlugin extends Plugin
{
  /**
   * @return array
   *
   * The getSubscribedEvents() gives the core a list of events
   *     that the plugin wants to listen to. The key of each
   *     array section is the event that the plugin listens to
   *     and the value (in the form of an array) contains the
   *     callable (or function) as well as the priority. The
   *     higher the number the higher the priority.
   */
  public static function getSubscribedEvents()
  {
    return [
      'onPluginsInitialized' => ['onPluginsInitialized', 0]
    ];
  }

  /**
   * Initialize the plugin
   */
  public function onPluginsInitialized()
  {
    // If we are in admin
    if ($this->isAdmin()) {
      // Enable the main event we are interested in
      $this->enable([
        'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
      ]);

      return;
    }

    // If plugin is enabled and if we are not in admin
    if ($this->config['plugins.webpacker.enabled']) {

      // Load classes
      require_once(__DIR__ . '/classes/WebpackTwigExtension.php');
      require_once(__DIR__ . '/classes/WebpackAssets.php');

      // Enable the main event we are interested in
      $this->enable([
        'onAssetsInitialized' => ['onAssetsInitialized', 0],
        'onTwigExtensions' => ['onTwigExtensions', 0]
      ]);
    }
  }

  /**
   * On Twig Extentions Hook
   */
  public function onTwigExtensions()
  {
    $this->grav['twig']->twig->addExtension(new WebpackerTwigExtension);
  }

  /**
   * On Twig Site Variables Hook
   */
  public function onAssetsInitialized()
  {
    $webpackerConfig = $this->config['plugins.webpacker'];

    $webpackAssets = new WebpackAssets;

    // Add menifest asset if enabled
    if ($webpackerConfig['manifest']) {
      $webpackAssets->add('manifest.js', 10, false, 'defer', null);
    }

    // Add vendors asset if enabled
    if ($webpackerConfig['vendors']) {
      $webpackAssets->add('vendors.js', 10, false, 'defer', null);
    }

    // Add commons asset if enabled
    if ($webpackerConfig['commons']) {
      $webpackAssets->add('commons.js', 10, false, 'defer', null);
    }
  }

  /**
   * On Twig Site Variables Hook
   */
  public function onTwigSiteVariables()
  {
    $webpackerConfig = $this->config['plugins.webpacker'];

    // If WebpackerPlugin is in development mode
    if ($webpackerConfig['mode'] === 'development') {

      $twig = $this->grav['twig'];

      // Get protocol from WebpackerPlugin config
      $protocol = $webpackerConfig['https'] ? 'https' : 'http';

      // Define the new frontend base url for development mode
      $admin_class_variables = [
        'base_url_relative_frontend' => "{$protocol}://localhost:3001",
      ];

      // Merge Twig variable to overide base_url_relative_frontend with new one
      $twig->twig_vars = array_merge($twig->twig_vars, $admin_class_variables);
    }
  }
}
