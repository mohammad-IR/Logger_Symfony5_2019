<?php

namespace ContainerF1l10SX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoggerServicesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Services\Logger\LoggerServices' shared autowired service.
     *
     * @return \App\Services\Logger\LoggerServices
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'Logger'.\DIRECTORY_SEPARATOR.'LoggerServices.php';

        return $container->privates['App\\Services\\Logger\\LoggerServices'] = new \App\Services\Logger\LoggerServices(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}
