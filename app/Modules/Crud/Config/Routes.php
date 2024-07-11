<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group('query', ['namespace' => 'App\Modules\Crud\Controllers'], function($subroutes){

	/*** Route for Dashboard ***/
    $subroutes->add('', 'Crud::index'); 

});
 