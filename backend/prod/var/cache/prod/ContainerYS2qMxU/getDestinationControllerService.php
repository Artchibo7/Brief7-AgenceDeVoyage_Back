<?php

namespace ContainerYS2qMxU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDestinationControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Api\DestinationController' shared autowired service.
     *
     * @return \App\Controller\Api\DestinationController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Api\\DestinationController'] = $instance = new \App\Controller\Api\DestinationController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\Api\\DestinationController', $container));

        return $instance;
    }
}
