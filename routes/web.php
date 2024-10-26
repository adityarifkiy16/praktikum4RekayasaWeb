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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('wisata', ['uses' => 'WisataController@showAll']);
    $router->get('wisata/{id}', ['uses' => 'WisataController@showOne']);
    $router->post('wisata', ['uses' => 'WisataController@create']);
    $router->put('wisata/{id}', ['uses' => 'WisataController@update']);
    $router->delete('wisata/{id}', ['uses' => 'WisataController@delete']);
});
