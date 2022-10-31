<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group('sample', ['namespace' => 'App\Modules\Sample\Controllers'], function($subroutes){

	/*** Route for Dashboard ***/
    $subroutes->add('', 'Sample::index'); 
    $subroutes->add('validation', 'Sample::validation'); 

});
 