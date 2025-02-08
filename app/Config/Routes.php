<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::main');
$routes->get('/login', 'Home::login');
$routes->get('/signup', 'Home::signup');
$routes->get('/store', 'Home::store');
$routes->get('/category', 'Home::category');
$routes->get('/add_products', 'Home::addProducts');
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/product-list', 'Home::products');
$routes->get('/logout', 'Operations::logout');


//login routes
$routes->group('dashboard', ['filter' => 'login'], function ($routes) {
    $routes->get('/', 'Dashboard::index');
    // Add other dashboard-related routes here
});

//handle data routes
$routes->post('/signup', 'Operations::createStore');
$routes->post('/login', 'Operations::login');
