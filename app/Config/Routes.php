<?php

namespace Config;

use App\Controllers\Dashboard;

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


// $routes->group('home',['filter'=>'userlogin'], function ($routes) {
$routes->get('/', 'front/Home::index');
$routes->post('/adduser', 'front/Home::adduser');
$routes->add('/checkuser2', 'front/Home::checkuser2');
$routes->post('/forgot', 'front/Home::forgot');
$routes->get('/logout', 'front/Home::logout');

$routes->add('/sub', 'front/Home::sub');
$routes->get('/Vehicle_details/(:num)', 'Vdetails::index/$1');
$routes->post('/Vehicle_details/savebook' , 'Vdetails::savebook');
// $routes->set404Override('App\Errors::show404');

$routes->get('/page', 'front/Page::index');
$routes->get('/faq_page', 'front/Page_FAQ::index');
$routes->get('/privacy_page', 'front/Page_Privacy::index');
$routes->get('/terms_page', 'front/Page_Terms::index');

$routes->get('/car_listing', 'front/Car_listing::index');
$routes->post('/car_listing/search', 'front/Car_listing::search');



$routes->get('/contact_us', 'front/Contact_us::index');
$routes->post('/contact_us/sent', 'front/Contact_us::sent');

$routes->get('/profile','front/Profile_setting::index');
$routes->post('/profile/update','front/Profile_setting::update');
$routes->get('/post_testimonial','front/post_testimonial::index');
$routes->post('/post_testimonial/save','front/post_testimonial::save');

$routes->get('/my_booking','front/mybooking::index');
$routes->get('/my_testimonial','front/mytestimonial::index');

$routes->get('/Change_password','front/Change_password::index');
$routes->post('/Change_password/change','front/Change_password::change');

   
// });




$routes->group('',['filter'=>'AuthCheck'],function($routes){
        //add all routes
        $routes->get('/dashboard','Dashboard::index');
        $routes->post('/dashboard/create_brand','Dashboard::create_brand');
        $routes->get('/dashboard/manage_brands','Dashboard::manage_brands');
        $routes->get('/dashboard/edit_brand/(:num)','Dashboard::edit_brand/$1');
        $routes->post('/dashboard/update_brand/(:num)','Dashboard::update_brand/$1');

        $routes->get('/dashboard/post_avehical','Dashboard::post_avehical');
        $routes->post('/dashboard/save_vehicles','Dashboard::save_vehicles');
        $routes->get('/dashboard/manage_vehicles','Dashboard::manage_vehicles');
        $routes->get('/dashboard/edit_vehicle/(:num)','Dashboard::edit_vehicle/$1');
        $routes->get('/dashboard/update_vehicle/(:num)','Dashboard::update_vehicle/$1');

        $routes->get('/dashboard/changeimage1/(:num)','Changeimage::index/$1');
        $routes->get('/dashboard/changeimage2/(:num)','Changeimage::img2/$1');
        $routes->get('/dashboard/changeimage3/(:num)','Changeimage::img3/$1');
        $routes->get('/dashboard/changeimage4/(:num)','Changeimage::img4/$1');
        $routes->get('/dashboard/changeimage5/(:num)','Changeimage::img5/$1');

        $routes->post('/dashboard/updateimg1/(:num)','Changeimage::updateimg1/$1');
        $routes->post('/dashboard/updateimg2/(:num)','Changeimage::updateimg2/$1');
        $routes->post('/dashboard/updateimg3/(:num)','Changeimage::updateimg3/$1');
        $routes->post('/dashboard/updateimg4/(:num)','Changeimage::updateimg4/$1');
        $routes->post('/dashboard/updateimg5/(:num)','Changeimage::updateimg5/$1');

        $routes->get('/dashboard/manage_booking','manage_booking::index');
        $routes->get('/dashboard/manage_booking/conf/(:num)','manage_booking::conf/$1');
        $routes->get('/dashboard/manage_booking/cancel/(:num)','manage_booking::cancel/$1');

        $routes->get('/dashboard/manage_testimonial','testimonial::index');
        $routes->get('/dashboard/manage_testimonial/inactive/(:num)','testimonial::inactive/$1');
        $routes->get('/dashboard/manage_testimonial/active/(:num)','testimonial::active/$1');

        $routes->get('/dashboard/manage_contactquery','Contactquery::index');
        $routes->get('/dashboard/manage_contactquery/pending/(:num)','Contactquery::pending/$1');

        $routes->get('/dashboard/reg_users','RegUser::index');
        $routes->get('/dashboard/reg_users/delete/(:num)','RegUser::delete/$1');

        $routes->get('/dashboard/manage_subscribers','Managesub::index');
        $routes->get('/dashboard/manage_subscribers/delete/(:num)','Managesub::delete/$1');

        $routes->get('/dashboard/update_contactinfo','contactinfo::index');
        $routes->post('/dashboard/update_contactinfo/update','contactinfo::update');

        $routes->get('/dashboard/manage_page','Manage_Page::index');
        $routes->post('/dashboard/manage_page/update','Manage_Page::update_about');

        $routes->get('/dashboard/manage_faq','Manage_FAQ::index');
        $routes->post('/dashboard/manage_faq/update','Manage_FAQ::update_faq');

        $routes->get('/dashboard/manage_privacy','Manage_Privacy::index');
        $routes->post('/dashboard/manage_privacy/update','Manage_Privacy::update_privacy');

        $routes->get('/dashboard/manage_terms','Manage_Terms::index');
        $routes->post('/dashboard/manage_terms/update','Manage_Terms::update_terms');

        $routes->get('/dashboard/update_password','Update_pass::index');
        $routes->post('/dashboard/update_password/update','Update_pass::update');
        

});

$routes->group('',['filter'=>'AlreadyLoggedIn'],function($routes){

    $routes->get('/admin','Admin::index');

    $routes->get('/admin/register','Admin::register');
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
