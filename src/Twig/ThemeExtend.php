<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau(akinaysau@gmail.com)
 * Date: 14.12.18
 * Time: 13:44
 *
 * @package sft
 */

namespace Sau\WP\Theme\ThemeBundle\Twig;


use Twig\Extension\AbstractExtension;
use Twig_Extension;
use Twig_SimpleFunction;

class ThemeExtend extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new Twig_SimpleFunction('sau', function () {
                echo '<p>test success</p>';
            }),
        ];
    }

}
