<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('productos', 'Home::productos');

/* Rutas de registro de usuario */
$routes->get('/registro', 'usuario_controller::create');
$routes->post('/enviar-form', 'usuario_controller::formValidation');

/* Rutas del login */
$routes->get('/login', 'login_controller::index');
$routes->post('/enviarlogin', 'login_controller::auth');
$routes->get('/logout', 'login_controller::logout');

$routes->get('/panel', 'panel_controller::index', ['filter' => 'auth']);
$routes->get('/panelAdmin', 'panel_controller::panelAdmin');
$routes->get('/panelUsuario', 'panel_controller::panelUsuario');



