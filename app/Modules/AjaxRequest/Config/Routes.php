<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group('ajax', ['namespace' => 'App\Modules\AjaxRequest\Controllers'], function($subroutes){

	/*** Route for Dashboard ***/
    $subroutes->add('', 'AjaxRequest::index'); 

});
 