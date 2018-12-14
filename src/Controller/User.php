<?php
/**
 * Created by PhpStorm.
 * User: AkinaySau(akinaysau@gmail.com)
 * Date: 14.12.18
 * Time: 11:16
 *
 * @package pocket-coach
 */

namespace Sau\WP\Theme\ThemeBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class User extends AbstractController
{

    public function index():Response
    {
        $data = [
            'test' => $this->container->get('service_container')
                                      ->getParameter('kernel.debug'),
        ];

        dump($this->container->get('twig'));
        exit();
        die();
        return $this->render('@Theme/layout.html.twig', $data);
    }
}
