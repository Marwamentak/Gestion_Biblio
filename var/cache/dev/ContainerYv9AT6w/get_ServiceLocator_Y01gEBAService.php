<?php

namespace ContainerYv9AT6w;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Y01gEBAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Y01gEBA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Y01gEBA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\UserController::signUp' => ['privates', '.service_locator.r_XOrDH.App\\Controller\\UserController::signUp()', 'getUserControllersignUpService', true],
            'App\\Controller\\UserController::signIn' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\UserController::signIn()', 'getUserControllersignInService', true],
            'App\\Controller\\BookController::addBook' => ['privates', '.service_locator.P.blNFL.App\\Controller\\BookController::addBook()', 'getBookControlleraddBookService', true],
            'App\\Controller\\BookController::listBooks' => ['privates', '.service_locator.P.blNFL.App\\Controller\\BookController::listBooks()', 'getBookControllerlistBooksService', true],
            'App\\Controller\\BookController::editBook' => ['privates', '.service_locator.P.blNFL.App\\Controller\\BookController::editBook()', 'getBookControllereditBookService', true],
            'App\\Controller\\BookController::deleteBook' => ['privates', '.service_locator.P.blNFL.App\\Controller\\BookController::deleteBook()', 'getBookControllerdeleteBookService', true],
            'App\\Controller\\BorrowingController::borrow' => ['privates', '.service_locator.fq4bKpU.App\\Controller\\BorrowingController::borrow()', 'getBorrowingControllerborrowService', true],
            'App\\Controller\\BorrowingController::listBorrowings' => ['privates', '.service_locator.P.blNFL.App\\Controller\\BorrowingController::listBorrowings()', 'getBorrowingControllerlistBorrowingsService', true],
            'App\\Controller\\BorrowingController::returnBook' => ['privates', '.service_locator.iHNdZ5r.App\\Controller\\BorrowingController::returnBook()', 'getBorrowingControllerreturnBookService', true],
            'App\\Controller\\HistoryController::index' => ['privates', '.service_locator.mSaexrr.App\\Controller\\HistoryController::index()', 'getHistoryControllerindexService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.4wc4Ag1.kernel::registerContainerConfiguration()', 'get_ServiceLocator_4wc4Ag1_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.4wc4Ag1.kernel::loadRoutes()', 'get_ServiceLocator_4wc4Ag1_KernelloadRoutesService', true],
            'App\\Controller\\UserController:signUp' => ['privates', '.service_locator.r_XOrDH.App\\Controller\\UserController::signUp()', 'getUserControllersignUpService', true],
            'App\\Controller\\UserController:signIn' => ['privates', '.service_locator.mXDaS5b.App\\Controller\\UserController::signIn()', 'getUserControllersignInService', true],
            'App\\Controller\\BookController:addBook' => ['privates', '.service_locator.P.blNFL.App\\Controller\\BookController::addBook()', 'getBookControlleraddBookService', true],
            'App\\Controller\\BookController:listBooks' => ['privates', '.service_locator.P.blNFL.App\\Controller\\BookController::listBooks()', 'getBookControllerlistBooksService', true],
            'App\\Controller\\BookController:editBook' => ['privates', '.service_locator.P.blNFL.App\\Controller\\BookController::editBook()', 'getBookControllereditBookService', true],
            'App\\Controller\\BookController:deleteBook' => ['privates', '.service_locator.P.blNFL.App\\Controller\\BookController::deleteBook()', 'getBookControllerdeleteBookService', true],
            'App\\Controller\\BorrowingController:borrow' => ['privates', '.service_locator.fq4bKpU.App\\Controller\\BorrowingController::borrow()', 'getBorrowingControllerborrowService', true],
            'App\\Controller\\BorrowingController:listBorrowings' => ['privates', '.service_locator.P.blNFL.App\\Controller\\BorrowingController::listBorrowings()', 'getBorrowingControllerlistBorrowingsService', true],
            'App\\Controller\\BorrowingController:returnBook' => ['privates', '.service_locator.iHNdZ5r.App\\Controller\\BorrowingController::returnBook()', 'getBorrowingControllerreturnBookService', true],
            'App\\Controller\\HistoryController:index' => ['privates', '.service_locator.mSaexrr.App\\Controller\\HistoryController::index()', 'getHistoryControllerindexService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\UserController::signUp' => '?',
            'App\\Controller\\UserController::signIn' => '?',
            'App\\Controller\\BookController::addBook' => '?',
            'App\\Controller\\BookController::listBooks' => '?',
            'App\\Controller\\BookController::editBook' => '?',
            'App\\Controller\\BookController::deleteBook' => '?',
            'App\\Controller\\BorrowingController::borrow' => '?',
            'App\\Controller\\BorrowingController::listBorrowings' => '?',
            'App\\Controller\\BorrowingController::returnBook' => '?',
            'App\\Controller\\HistoryController::index' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\UserController:signUp' => '?',
            'App\\Controller\\UserController:signIn' => '?',
            'App\\Controller\\BookController:addBook' => '?',
            'App\\Controller\\BookController:listBooks' => '?',
            'App\\Controller\\BookController:editBook' => '?',
            'App\\Controller\\BookController:deleteBook' => '?',
            'App\\Controller\\BorrowingController:borrow' => '?',
            'App\\Controller\\BorrowingController:listBorrowings' => '?',
            'App\\Controller\\BorrowingController:returnBook' => '?',
            'App\\Controller\\HistoryController:index' => '?',
        ]);
    }
}
