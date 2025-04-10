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


//matches localhost:8888/lumen/public/
$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/events', 'EventController@index');
$router->get('/events/{id}', 'EventController@show');
$router->post('/events', 'EventController@store');
$router->put('/events/{id}', 'EventController@update');
$router->delete('/events/{id}', 'EventController@destroy');

$router->get('/news', 'NewsController@index');
$router->get('/news/{id}', 'NewsController@show');
$router->post('/news', 'NewsController@store');
$router->put('/news/{id}', 'NewsController@update');
$router->delete('/news/{id}', 'NewsController@destroy');

$router->get('/gallery', 'GalleryController@index');
$router->get('/gallery/{id}', 'GalleryController@show');
$router->post('/gallery', 'GalleryController@store');
$router->put('/gallery/{id}', 'GalleryController@update');
$router->delete('/gallery/{id}', 'GalleryController@destroy');

$router->get('/letters', 'LetterController@index');
$router->get('/letters/{id}', 'LetterController@show');
$router->post('/letters', 'LetterController@store');
$router->put('/letters/{id}', 'LetterController@update');
$router->delete('/letters/{id}', 'LetterController@destroy');














