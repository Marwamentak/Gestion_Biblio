<?php

namespace ContainerA4Ug6wl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Transport_InMemory_FactoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'messenger.transport.in_memory.factory' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\InMemory\InMemoryTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['messenger.transport.in_memory.factory'] = new \Symfony\Component\Messenger\Transport\InMemory\InMemoryTransportFactory(($container->privates['clock'] ??= new \Symfony\Component\Clock\Clock()));
    }
}
