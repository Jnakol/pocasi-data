<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get('stanice/(:num)', 'Main::stanice/$1');
$routes->get('data/(:num)', 'Main::data/$1');

