<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Pengunjung
$routes->get('/', 'Pengunjung::index');
$routes->get('/info', 'Pengunjung::info');

// Layout User (Admin dan Penghuni)
$routes->get('dashboard', 'User::index', ['filter' => 'role:admin,penghuni']);
$routes->get('/profile', 'User::profile', ['filter' => 'role:admin,penghuni']);
$routes->get('/editprofile', 'User::editprofile', ['filter' => 'role:admin,penghuni']);
$routes->post('/updateprofile/(:num)', 'User::updateprofile/$1', ['filter' => 'role:admin,penghuni']);

// Admin
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/datapenghuni', 'Admin::datapenghuni', ['filter' => 'role:admin']);
$routes->post('/editpenghuni/(:num)', 'Admin::editpenghuni/$1', ['filter' => 'role:admin']);
$routes->get('/deletepenghuni/(:num)', 'Admin::deletepenghuni/$1', ['filter' => 'role:admin']);
$routes->get('/datakamar', 'Kamar::datakamar', ['filter' => 'role:admin']);
$routes->get('/formkamar', 'Kamar::formkamar', ['filter' => 'role:admin']);
$routes->post('/store', 'Kamar::store', ['filter' => 'role:admin']);
$routes->get('/deletekamar/(:num)', 'Kamar::delete/$1', ['filter' => 'role:admin']);
$routes->get('/editkamar-(:num)', 'Kamar::editkamar/$1', ['filter' => 'role:admin']);
$routes->post('/updatekamar/(:num)', 'Kamar::updatekamar/$1', ['filter' => 'role:admin']);
$routes->get('/datapemesanan', 'Admin::datapemesanan', ['filter' => 'role:admin']);
$routes->get('/updatepemesanan-(:num)', 'Admin::updatepemesanan/$1', ['filter' => 'role:admin']);
$routes->post('/editpemesanan/(:num)', 'Admin::editpemesanan/$1', ['filter' => 'role:admin']);
$routes->get('/indexpembayaran', 'Pembayaran::index', ['filter' => 'role:admin']);
$routes->get('/pembayaranpenghuni', 'Pembayaran::pembayaranpenghuni', ['filter' => 'role:admin']);
$routes->get('/detailpembayaran-(:num)', 'Pembayaran::detail/$1', ['filter' => 'role:admin']);
$routes->post('/editpembayaran/(:num)', 'Pembayaran::editpembayaran/$1', ['filter' => 'role:admin']);

// Penghuni
$routes->post('/pesan', 'Penghuni::pesan', ['filter' => 'role:penghuni']);
$routes->get('/riwayat', 'Penghuni::riwayat', ['filter' => 'role:penghuni']);
$routes->get('/bayarbulanan', 'Penghuni::bayarbulanan', ['filter' => 'role:penghuni']);
$routes->get('/formpembayaran', 'Penghuni::formpembayaran', ['filter' => 'role:penghuni']);
$routes->post('/bayar', 'Penghuni::bayar', ['filter' => 'role:penghuni']);
$routes->post('/editbayar/(:num)', 'Penghuni::editbayar/$1', ['filter' => 'role:penghuni']);



// $routes->group('admin', function($routes){
//     $routes->get('/', 'PageController::index');

//     //Routes Kamar
// 	$routes->get('kamar', 'Kamar::index');
// 	$routes->get('kamar/(:segment)/preview', 'Kamar::preview/$1');
//     $routes->add('kamar/new', 'Kamar::new');
//     $routes->add('kamar/store', 'Kamar::store');
// 	$routes->add('kamar/(:segment)/edit', 'Kamar::edit/$1');
// 	$routes->add('kamar/(:segment)/update', 'Kamar::update/$1');
// 	$routes->get('kamar/(:segment)/delete', 'Kamar::delete/$1');

//     //Route Penghuni
//     $routes->get('penghuni', 'Penghuni::index');
// 	$routes->get('penghuni/(:segment)/preview', 'Penghuni::preview/$1');
// 	$routes->add('penghuni/(:segment)/edit', 'Penghuni::edit/$1');
// 	$routes->add('penghuni/(:segment)/update', 'Penghuni::update/$1');
// 	$routes->get('penghuni/(:segment)/delete', 'Penghuni::delete/$1');

//     //Route Pemesanan
//     $routes->get('pemesanan', 'Pemesanan::index');
// 	$routes->get('pemesanan/(:segment)/preview', 'Pemesanan::preview/$1');
// 	$routes->get('pemesanan/(:segment)/delete', 'Pemesanan::delete/$1');

//     //Route Pembayaran
//     $routes->get('pembayaran', 'Pembayaran::index');
// 	$routes->get('pembayaran/(:segment)/preview', 'Pembayaran::preview/$1');
// 	$routes->get('pembayaran/(:segment)/delete', 'Pembayaran::delete/$1');

//     //Route Komplin
//     $routes->get('komplain', 'Komplain::index');
// 	$routes->get('komplain/(:segment)/preview', 'Komplain::preview/$1');
// 	$routes->get('komplain/(:segment)/delete', 'Komplain::delete/$1');

// });

// $routes->group('penghuni', function($routes){
//     $routes->get('/', 'Penghuni::index');

//     //Route Pemesanan
//     $routes->add('pemesanan/new', 'Pemesanan::new');
//     $routes->add('pemesanan/store', 'Pemesanan::store');


//     //Route Pembayaran
//     $routes->add('pembayaran/new', 'Pembayaran::new');
//     $routes->add('pembayaran/store', 'Pembayaran::store');

//     //Route Komplin
//     $routes->add('komplain/new', 'Komplain::new');
//     $routes->add('komplain/store', 'Komplain::store');

// });



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
