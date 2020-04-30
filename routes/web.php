<?php

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

$router->group(['prefix'=>'first'], function () use ($router){
    $router->post('showAll',['uses'=>'FirstController@showAll']);
    $router->post('show/{id}',['uses'=>'FirstController@show']);
    $router->put('add',['uses'=>'FirstController@add']);
    $router->put('edit/{id}',['uses'=>'FirstController@update']);
    $router->delete('/',['uses'=>'FirstController@delete']);
});