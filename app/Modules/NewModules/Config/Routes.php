<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group('sample', ['namespace' => 'App\Modules\NewModules\Controllers'], function($subroutes){

	/*** Route for Dashboard ***/
    $subroutes->add('', 'Jumping::index'); 

});