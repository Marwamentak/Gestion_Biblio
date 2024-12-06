<?php

namespace ContainerJXqhySe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllersignInService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mXDaS5b.App\Controller\UserController::signIn()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mXDaS5b.App\\Controller\\UserController::signIn()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'authenticationUtils' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
        ], [
            'authenticationUtils' => '?',
        ]))->withContext('App\\Controller\\UserController::signIn()', $container);
    }
}