<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();


if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

// Router Setup
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// Route Definitions
$routes->get('/', 'Home::index');

// Ruta para generar un pdf
$routes->get('/news/otroPDF', 'NewsController::otroPDF');


$routes->get('/news/', 'NewsController::index');
$routes->get('/news/cards', 'NewsController::cards');
$routes->match(['get', 'post'], 'news/create', 'NewsController::create');
$routes->add('news/edit/(:segment)', 'NewsController::edit/$1');

$routes->resource('periodista', ['controller' =>'PeriodistaController']);

// Additional Routing
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
