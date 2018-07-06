<?php
namespace Grav\Plugin\Webpacker;

use Twig_Extension;
use Twig_SimpleFunction;
use Grav\Plugin\Webpacker\WebpackAssets;

/**
 * [Add webpack asset from Twig]
 *
 * Class WebpackTwigExtension
 * @package Grav\Plugin
 * @license MIT License by jimblue
 */
class WebpackerTwigExtension extends Twig_Extension
{

  /**
   * Environment-configuration
   * @var string
   */
  protected $webpackAssets;

  /**
   * Instantiate WebpackTwigExtension class
   */
  public function __construct()
  {
    $this->webpackAssets = new WebpackAssets;
  }

  /**
   * Register twig functions
   * @return array
   */
  public function getFunctions()
  {
    return [
      new Twig_SimpleFunction('webpacker', [$this, 'addAsset'])
    ];
  }

  /**
   * Add asset function
   * @param string $path
   * @param boolean $inline
   * @return string
   */
  public function addAsset($asset, $priority = null, $pipeline = true, $loading = null, $group = null)
  {
    return $this->webpackAssets->add($asset, $priority, $pipeline, $loading, $group);
  }
}
