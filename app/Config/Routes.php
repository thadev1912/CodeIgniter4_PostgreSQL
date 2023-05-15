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
//Router Basic
 $routes->get('/', 'HomeController::index');
$routes->group('blog',function($routes){   
    $routes->get('/', 'BlogController::index');
});
$routes->group('khachhang',function($routes){   
    $routes->get('/', 'CustomerController::index');
});
$routes->group('lienhe',function($routes){   
    $routes->get('/', 'VisitController::index');
});
$routes->group('sinhvien',function($routes){   
    $routes->get('/', 'SinhvienController::index');
    $routes->get('them', 'SinhvienController::create');
    $routes->post('luu', 'SinhvienController::store');
    $routes->get('sua/(:num)', 'SinhvienController::edit/$1');
    $routes->put('capnhat/(:num)', 'SinhvienController::update/$1');
    $routes->get('xoa/(:num)', 'SinhvienController::delete/$1');
    $routes->get('thongke', 'SinhvienController::show');
});
$routes->group('lophoc',function($routes){   
    $routes->get('/', 'LophocController::index');
    $routes->get('them', 'LophocController::create');
    $routes->post('luu', 'LophocController::store');
    $routes->get('sua/(:num)', 'LophocController::edit/$1');
    $routes->put('capnhat/(:num)', 'LophocController::update/$1');
    $routes->get('xoa/(:num)', 'LophocController::delete/$1');
});
$routes->group('api/sinhvien',function($routes){   
    $routes->get('/', 'SinhvienRestAPIController::index');   
    $routes->post('luu', 'SinhvienRestAPIController::store');
    $routes->get('sua/(:num)', 'SinhvienRestAPIController::edit/$1');
    $routes->put('capnhat/(:num)', 'SinhvienRestAPIController::update/$1');
    $routes->delete('xoa/(:num)', 'SinhvienRestAPIController::delete/$1');
   
});
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
