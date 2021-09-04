<?php

namespace ContainerWXd5zf7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VwdGHtzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vwdGHtz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vwdGHtz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\AdminController::sendEmail' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\IndexController::index' => ['privates', '.service_locator.RlLJ4.q', 'get_ServiceLocator_RlLJ4_QService', true],
            'App\\Controller\\IndexController::logger' => ['privates', '.service_locator.Yu84yu0', 'get_ServiceLocator_Yu84yu0Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController::register' => ['privates', '.service_locator.uzf8IEO', 'get_ServiceLocator_Uzf8IEOService', true],
            'App\\Controller\\SecurityController::validation_eamil' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\SecurityController::validation_password' => ['privates', '.service_locator.uzf8IEO', 'get_ServiceLocator_Uzf8IEOService', true],
            'App\\Controller\\Users\\UsersController::dashbord' => ['privates', '.service_locator.72IH7xB', 'get_ServiceLocator_72IH7xBService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\Admin\\AdminController:sendEmail' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\IndexController:index' => ['privates', '.service_locator.RlLJ4.q', 'get_ServiceLocator_RlLJ4_QService', true],
            'App\\Controller\\IndexController:logger' => ['privates', '.service_locator.Yu84yu0', 'get_ServiceLocator_Yu84yu0Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SecurityController:register' => ['privates', '.service_locator.uzf8IEO', 'get_ServiceLocator_Uzf8IEOService', true],
            'App\\Controller\\SecurityController:validation_eamil' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\SecurityController:validation_password' => ['privates', '.service_locator.uzf8IEO', 'get_ServiceLocator_Uzf8IEOService', true],
            'App\\Controller\\Users\\UsersController:dashbord' => ['privates', '.service_locator.72IH7xB', 'get_ServiceLocator_72IH7xBService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\Admin\\AdminController::sendEmail' => '?',
            'App\\Controller\\IndexController::index' => '?',
            'App\\Controller\\IndexController::logger' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::register' => '?',
            'App\\Controller\\SecurityController::validation_eamil' => '?',
            'App\\Controller\\SecurityController::validation_password' => '?',
            'App\\Controller\\Users\\UsersController::dashbord' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\AdminController:sendEmail' => '?',
            'App\\Controller\\IndexController:index' => '?',
            'App\\Controller\\IndexController:logger' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:register' => '?',
            'App\\Controller\\SecurityController:validation_eamil' => '?',
            'App\\Controller\\SecurityController:validation_password' => '?',
            'App\\Controller\\Users\\UsersController:dashbord' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
