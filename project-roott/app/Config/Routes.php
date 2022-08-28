<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/songDetail/(:alphanum)', 'songDetail::index/$1');
$routes->get("/playlistGen", "queue::makePlaylist");
$routes->get('/logout', 'playlist::logout');
$routes->get('/login', 'login::login');
$routes->get('/register', 'login::register');
$routes->get('/logout', 'login::logout');
$routes->get("/playlists", "playlist::index");
$routes->get('/queue/(:alphanum)', 'queue::index/$1');
$routes->get('/playlist/(:alphanum)', 'playlist::detail/$1');
$routes->get("/removeQueue/(:alphanum)", "queue::removeQueue/$1");

$routes->post('/login', 'login::login');
$routes->post('/register', 'login::register');
$routes->post('/playlistGen', 'queue::makePlaylist');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
