<?php

<<<<<<< HEAD
if (!isset($routes)) {
    $routes = \Config\Services::routes(true);
}

$routes->group('admin', ['namespace' => 'App\Modules\Admin\Controllers'], function ($subroutes) {

    /*** Route for Dashboard ***/
    $subroutes->add('', 'Dashboard::index');
    $subroutes->add('dashboard', 'Dashboard::index');
    $subroutes->add('base', 'Dashboard::testFunction');

    $subroutes->add('blog/(:segment)', 'Dashboard::index/$1');
});
=======
if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group('admin', ['namespace' => 'App\Modules\Admin\Controllers'], function($subroutes){

	/*** Route for Dashboard ***/
    $subroutes->add('', 'Dashboard::index');
	$subroutes->add('dashboard', 'Dashboard::index');

});
>>>>>>> parent of 1f5a75e (Upload lesson files of basecontroller)
