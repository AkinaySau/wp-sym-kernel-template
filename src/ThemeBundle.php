<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau(akinaysau@gmail.com)
 * Date: 14.12.18
 * Time: 11:11
 *
 * @package pocket-coach
 */

namespace Sau\WP\Theme\ThemeBundle;


use Sau\WP\Plugin\SymKernel\AbstractBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ThemeBundle extends AbstractBundle
{

    protected $router_prefix = "/theme";

    public function build(ContainerBuilder $container)
    {
        parent::build($container);

    }


}
