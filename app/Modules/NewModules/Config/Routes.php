<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group('sample', ['namespace' => 'App\Modules\NewModules\Controllers'], function($subroutes){

	/*** Route for Dashboard ***/
    $subroutes->add('', 'Jumping::index'); 

});

$routes->group('submit-form', ['namespace' => 'App\Modules\NewModules\Controllers'], function($subroutes){

	// Leave blank for load page
    $subroutes->add('', 'Jumping::submitForm'); 

    // If receive a validation path, pass the parameter by each slash, exp pass [true]
    $subroutes->add('validation', 'Jumping::submitForm/true'); 

});

$routes->group('config', ['namespace' => 'App\Modules\NewModules\Controllers'], function($subroutes){
 
    $subroutes->add('', 'Jumping::loadConfigPage');  

});