<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau
 * Date: 12.05.2017
 * Time: 10:40
 */


use Sau\WP\Plugin\SymKernel\Filter\BundleFilter;
use Sau\WP\Theme\ThemeBundle\ThemeBundle;

include __DIR__."/vendor/autoload.php";

BundleFilter::addBundle(ThemeBundle::class, ['all' => true]);
