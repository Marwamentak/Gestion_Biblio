<?php

namespace ContainerJXqhySe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBorrowingControllerreturnBookService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iHNdZ5r.App\Controller\BorrowingController::returnBook()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iHNdZ5r.App\\Controller\\BorrowingController::returnBook()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'borrowing' => ['privates', '.errored..service_locator.iHNdZ5r.App\\Entity\\Borrowing', NULL, 'Cannot autowire service ".service_locator.iHNdZ5r": it needs an instance of "App\\Entity\\Borrowing" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'borrowing' => 'App\\Entity\\Borrowing',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\BorrowingController::returnBook()', $container);
    }
}
