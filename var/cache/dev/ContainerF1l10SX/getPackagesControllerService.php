<?php

namespace ContainerF1l10SX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPackagesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Users\PackagesController' shared autowired service.
     *
     * @return \App\Controller\Users\PackagesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Users'.\DIRECTORY_SEPARATOR.'PackagesController.php';

        $container->services['App\\Controller\\Users\\PackagesController'] = $instance = new \App\Controller\Users\PackagesController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\Users\\PackagesController', $container));

        return $instance;
    }
}
