<?php

namespace ContainerYS2qMxU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YjYmAoZService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.yjYmAoZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yjYmAoZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'reservation' => ['privates', '.errored..service_locator.yjYmAoZ.App\\Entity\\Reservation', NULL, 'Cannot autowire service ".service_locator.yjYmAoZ": it needs an instance of "App\\Entity\\Reservation" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'reservation' => 'App\\Entity\\Reservation',
        ]);
    }
}
