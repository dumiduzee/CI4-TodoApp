<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  $routes->setAutoRoute(true);
$routes->get('/', 'Home::index');
$routes->add('login', 'Login::index');
$routes->add('register', 'Register::index');


