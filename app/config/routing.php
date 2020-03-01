<?php

use Controller\MainIndexController;
use Controller\OrderInfoController;
use Controller\OrderCheckoutController;
use Controller\ProductInfoController;
use Controller\ProductListController;
use Controller\UserAuthenticationController;
use Controller\UserLogoutController;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();

$routes->add(
    'index',
    new Route('/', ['_controller' => [MainIndexController::class, 'action']])
);

$routes->add(
    'product_list',
    new Route('/product/list', ['_controller' => [ProductListController::class, 'action']])
);
$routes->add(
    'product_info',
    new Route('/product/info/{id}', ['_controller' => [ProductInfoController::class, 'action']])
);

$routes->add(
    'order_info',
    new Route('/order/info', ['_controller' => [OrderInfoController::class, 'action']])
);
$routes->add(
    'order_checkout',
    new Route('/order/checkout', ['_controller' => [OrderCheckoutController::class, 'action']])
);

$routes->add(
    'user_authentication',
    new Route('/user/authentication', ['_controller' => [UserAuthenticationController::class, 'action']])
);
$routes->add(
    'logout',
    new Route('/user/logout', ['_controller' => [UserLogoutController::class, 'action']])
);

return $routes;
