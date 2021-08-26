<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$router->get('/crud','DetailsController@select');
$router->post('/crud','DetailsController@create');
$router->delete('/crud','DetailsController@delete');
$router->put('/crud','DetailsController@update');







// $router->get('/','ExampleController@testConn');


//getdata 

// $router->get('/getdata','ExampleController@getData');

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });
