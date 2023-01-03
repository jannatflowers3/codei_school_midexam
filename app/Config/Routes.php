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
$routes->setDefaultController('Maintemplate');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Maintemplate::index');
$routes->get('/courses', 'Maintemplate::courses');
$routes->get('/gallery', 'Maintemplate::gallery');
$routes->get('/registration', 'Maintemplate::registration');
$routes->get('/contact', 'Maintemplate::contact');
//  dashbaord routing
$routes->get('admindashboard', 'AdminDashboard::index');
$routes->get('/adminlogin', 'AdminDashboard::adminlogin');
$routes->resource('Studentmanagement');
$routes->resource('Admin');
$routes->resource('Teacher');
$routes->resource('Courses');
$routes->resource('Staffs');
// signin controller
$routes->get('/users/signup', 'SignupController::index');
$routes->post('/users/store', 'SignupController::store');

$routes->get('/users/signin', 'SigninController::index');
$routes->post('/users/login', 'SigninController::loginAuth');
$routes->get('/users/logout', 'SigninController::logout');

// students routes
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
