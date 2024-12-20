<?php

namespace ContainerA4Ug6wl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\UserController::signUp' => ['privates', '.service_locator.__CzQUd.App\\Controller\\UserController::signUp()', 'getUserControllersignUpService', true],
            'App\\Controller\\UserController::signIn' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\UserController::signIn()', 'getUserControllersignInService', true],
            'App\\Controller\\BookController::list' => ['privates', '.service_locator.90Itq9t.App\\Controller\\BookController::list()', 'getBookControllerlistService', true],
            'App\\Controller\\BorrowingController::list' => ['privates', '.service_locator.mSaexrr.App\\Controller\\BorrowingController::list()', 'getBorrowingControllerlistService', true],
            'App\\Controller\\HistoryController::list' => ['privates', '.service_locator.C7XQUxp.App\\Controller\\HistoryController::list()', 'getHistoryControllerlistService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\UserController:signUp' => ['privates', '.service_locator.__CzQUd.App\\Controller\\UserController::signUp()', 'getUserControllersignUpService', true],
            'App\\Controller\\UserController:signIn' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\UserController::signIn()', 'getUserControllersignInService', true],
            'App\\Controller\\BookController:list' => ['privates', '.service_locator.90Itq9t.App\\Controller\\BookController::list()', 'getBookControllerlistService', true],
            'App\\Controller\\BorrowingController:list' => ['privates', '.service_locator.mSaexrr.App\\Controller\\BorrowingController::list()', 'getBorrowingControllerlistService', true],
            'App\\Controller\\HistoryController:list' => ['privates', '.service_locator.C7XQUxp.App\\Controller\\HistoryController::list()', 'getHistoryControllerlistService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\UserController::signUp' => '?',
            'App\\Controller\\UserController::signIn' => '?',
            'App\\Controller\\BookController::list' => '?',
            'App\\Controller\\BorrowingController::list' => '?',
            'App\\Controller\\HistoryController::list' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\UserController:signUp' => '?',
            'App\\Controller\\UserController:signIn' => '?',
            'App\\Controller\\BookController:list' => '?',
            'App\\Controller\\BorrowingController:list' => '?',
            'App\\Controller\\HistoryController:list' => '?',
        ]));
    }
}
