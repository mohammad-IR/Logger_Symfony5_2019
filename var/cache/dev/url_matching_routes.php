<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\SecurityController::register'], null, null, null, false, false, null]],
        '/validation_eamil' => [[['_route' => 'validation_eamil', '_controller' => 'App\\Controller\\SecurityController::validation_eamil'], null, null, null, false, false, null]],
        '/validation' => [[['_route' => 'validation', '_controller' => 'App\\Controller\\SecurityController::validation'], null, null, null, false, false, null]],
        '/validation_password' => [[['_route' => 'validation_password', '_controller' => 'App\\Controller\\SecurityController::validation_password'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/logger' => [[['_route' => 'request_for_log', '_controller' => 'App\\Controller\\IndexController::logger'], null, null, null, false, false, null]],
        '/dashbord' => [[['_route' => 'dashbord', '_controller' => 'App\\Controller\\Users\\UsersController::dashbord'], null, null, null, false, false, null]],
        '/dashbord/list_category' => [[['_route' => 'list_category', '_controller' => 'App\\Controller\\Admin\\CategoryController::list_category'], null, null, null, false, false, null]],
        '/dashbord/edit_category' => [[['_route' => 'edit_category', '_controller' => 'App\\Controller\\Admin\\CategoryController::edit_category'], null, null, null, false, false, null]],
        '/dashbord/delete_category' => [[['_route' => 'delete_category', '_controller' => 'App\\Controller\\Admin\\CategoryController::delete_category'], null, null, null, false, false, null]],
        '/sendEmail' => [[['_route' => 'sendEmail', '_controller' => 'App\\Controller\\Admin\\AdminController::sendEmail'], null, null, null, false, false, null]],
        '/dashbord/add_app' => [[['_route' => 'add_app', '_controller' => 'App\\Controller\\Users\\ApplicationController::add_app'], null, null, null, false, false, null]],
        '/dashbord/add_package_app' => [[['_route' => 'add_package_app', '_controller' => 'App\\Controller\\Users\\ApplicationController::add_package_app'], null, null, null, false, false, null]],
        '/dashbord/buy_package/change_token' => [[['_route' => 'change_token', '_controller' => 'App\\Controller\\Users\\ApplicationController::change_token'], null, null, null, false, false, null]],
        '/dashbord/list_app' => [[['_route' => 'list_app', '_controller' => 'App\\Controller\\Users\\ApplicationController::list_app'], null, null, null, false, false, null]],
        '/dashbord/list_app/searching_app' => [[['_route' => 'searching_app', '_controller' => 'App\\Controller\\Users\\ApplicationController::searching_app'], null, null, null, false, false, null]],
        '/dashbord/list_packages' => [[['_route' => 'list_packages', '_controller' => 'App\\Controller\\Users\\PackagesController::list_packages'], null, null, null, false, false, null]],
        '/dashbord/searching_package' => [[['_route' => 'searching_package', '_controller' => 'App\\Controller\\Users\\PackagesController::searching_package'], null, null, null, false, false, null]],
        '/dashbord/searching_bought_package' => [[['_route' => 'searching_bought_package', '_controller' => 'App\\Controller\\Users\\PackagesController::searching_bought_package'], null, null, null, false, false, null]],
        '/dashbord/getLogs' => [[['_route' => 'getLogs', '_controller' => 'App\\Controller\\Users\\LoggerController::getLogs'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/dashbord/(?'
                    .'|b(?'
                        .'|uy_package(?:([^/]++))?(*:208)'
                        .'|ought_package(?:/([^/]++))?(*:243)'
                    .')'
                    .'|list_app/(?'
                        .'|remove_app([^/]++)(*:282)'
                        .'|edit_app(?:/([^/]++))?(*:312)'
                    .')'
                    .'|add_packages(?:/([^/]++))?(*:347)'
                    .'|edit_packages(?:([^/]++))?(*:381)'
                    .'|de(?'
                        .'|lete_packages(?:([^/]++))?(*:420)'
                        .'|tail_log/([^/]++)(*:445)'
                    .')'
                    .'|Log_deatil_type/([^/]++)(*:478)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        208 => [[['_route' => 'buy_package', 'id' => null, '_controller' => 'App\\Controller\\Users\\UsersController::buy_package'], ['id'], null, null, false, true, null]],
        243 => [[['_route' => 'bought_package', 'name_package' => null, '_controller' => 'App\\Controller\\Users\\PackagesController::bought_package'], ['name_package'], null, null, false, true, null]],
        282 => [[['_route' => 'remove_app', '_controller' => 'App\\Controller\\Users\\ApplicationController::remove_app'], ['id'], null, null, false, true, null]],
        312 => [[['_route' => 'edit_app', 'id' => null, '_controller' => 'App\\Controller\\Users\\ApplicationController::edit_app'], ['id'], null, null, false, true, null]],
        347 => [[['_route' => 'add_packages', 'name_app' => null, '_controller' => 'App\\Controller\\Users\\PackagesController::add_packages'], ['name_app'], null, null, false, true, null]],
        381 => [[['_route' => 'edit_packages', 'id' => null, '_controller' => 'App\\Controller\\Users\\PackagesController::edit_packages'], ['id'], null, null, false, true, null]],
        420 => [[['_route' => 'delete_packages', 'id' => null, '_controller' => 'App\\Controller\\Users\\PackagesController::delete_packages'], ['id'], null, null, false, true, null]],
        445 => [[['_route' => 'detail_log', '_controller' => 'App\\Controller\\Users\\LoggerController::detail_log'], ['id'], null, null, false, true, null]],
        478 => [
            [['_route' => 'Log_deatil_type', '_controller' => 'App\\Controller\\Users\\LoggerController::Log_deatil_type'], ['type'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
