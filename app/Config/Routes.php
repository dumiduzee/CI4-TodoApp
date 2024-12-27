<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//  $routes->setAutoRoute(true);
$routes->get('/', 'Home::index');
$routes->add('login', 'Login::index');
$routes->add('register', 'Register::index');
$routes->add('dashboard', 'dashboard::index');
$routes->add('dashboard/addtodo', 'AddTodo::addTodoItem');
$routes->get('dashboard/delete/(:any)', 'AddTodo::deleteTodo/$1');





