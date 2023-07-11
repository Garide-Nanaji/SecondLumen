<?php
use  App\Http\Controllers\Api2Controller;
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

$router->group(['prefix' => 'api2'], function () use ($router) {
    $router->get('index', 'Api2Controller@index');
    $router->post('store', 'Api2Controller@store');
    $router->get('show/{id}', 'Api2Controller@show');
    $router->put('update/{id}', 'Api2Controller@update');
    $router->delete('delete/{id}', 'Api2Controller@destroy');
});

// $router->group(['prefix' => 'api2'], function () use ($router) {
//     $router->get('index', [Api2Controller::class, 'index']);
//     $router->post('store',[Api2Controller::class, 'store']);
//     $router->get('show/{id}',[Api2Controller::class, 'show']);
//     $router->put('update/{id}', [Api2Controller::class, 'update']);
//     $router->delete('delete/{id}',[Api2Controller::class, 'destroy']);
// });

