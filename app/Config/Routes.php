<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::main');
$routes->get('/login', 'Home::login');
$routes->get('/signup', 'Home::signup');
$routes->get('/store', 'Home::store');

//handle data routes
$routes->post('/signup', 'Operations::createStore');
$routes->post('/login', 'Operations::login');
