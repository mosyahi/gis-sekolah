<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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

// HOME
$routes->get('/', 'Home::index');
$routes->get('maps', 'Home::maps');

// AUTH
$routes->get('/login', 'AuthController::index');
$routes->post('/login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

// RESET PASSWORD
$routes->get('forgot-password', 'AuthController::forgotPassword');
$routes->post('forgot-password', 'AuthController::processForgotPassword');
$routes->get('reset-password/(:any)', 'AuthController::showResetForm/$1', ['as' => 'password.reset']);
$routes->post('reset-password', 'AuthController::reset', ['as' => 'password.update']);

// DASHBOARD ADMIN FILTERS
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->get('dashboard', 'DashboardController::index');

    // KATEGORI
    $routes->get('kategori', 'KategoriController::index');
    $routes->post('kategori/add', 'KategoriController::add');
    $routes->post('kategori/update/(:num)', 'KategoriController::update/$1');
    $routes->get('kategori/delete/(:num)', 'KategoriController::delete/$1');

    // KECAMATAN
    $routes->get('kecamatan', 'KecamatanController::index');
    $routes->post('kecamatan/add', 'KecamatanController::add');
    $routes->post('kecamatan/update/(:num)', 'KecamatanController::update/$1');
    $routes->get('kecamatan/delete/(:num)', 'KecamatanController::delete/$1');
    
    // SEKOLAH
    $routes->get('sekolah', 'SekolahController::index');
    $routes->get('sekolah/tambah', 'SekolahController::tambah');
    $routes->get('sekolah/create', 'SekolahController::create');
    $routes->post('sekolah/add', 'SekolahController::add');
    $routes->get('sekolah/edit/(:num)', 'SekolahController::edit/$1');
    $routes->post('sekolah/update/(:num)', 'SekolahController::update/$1');
    $routes->get('sekolah/delete/(:num)', 'SekolahController::delete/$1');

    // PETA
    $routes->get('peta', 'PetaController::index');
    $routes->get('uploads/(:segment)', 'PetaController::showImage/$1');


    // ADMINISTRATOR
    $routes->get('administrator', 'AdministratorController::index');
    $routes->post('administrator/add', 'AdministratorController::add');
    $routes->post('administrator/update/(:num)', 'AdministratorController::update/$1');
    $routes->get('administrator/delete/(:num)', 'AdministratorController::delete/$1');

    // RESET
    $routes->get('reset', 'ResetPasswordController::index');
    $routes->get('reset/delete/(:num)', 'ResetPasswordController::delete/$1');
});

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
