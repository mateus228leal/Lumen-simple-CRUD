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


$router->get('/players', 'PlayerController@getPlayers');
$router->post('/players', 'PlayerController@postPlayer');
$router->get('/players/{id}', 'PlayerController@getPlayer');
$router->put('/players/{id}', 'PlayerController@putPlayer');
$router->delete('/players/{id}', 'PlayerController@deletePlayer');



