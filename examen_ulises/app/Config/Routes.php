<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Login::index');
$routes->get('/login', 'Login::index');
$routes->post('/logged', 'Login::logged');
$routes->get('/register', 'Register::index');
$routes->post('/registroUsuarios', 'Register::guardar');

$routes->get('/inicio', 'inicio::index'); 
