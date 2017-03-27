<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ClientController@home');

Route::post('create_report', 'ClientController@create');

Route::get('view_client_to_update', 'ClientController@view_clients_update');

Route::get('view_client_to_delete', 'ClientController@view_clients_delete');

Route::get('/update_client/{$id}', 'ClientController@edit');

Route::post('/update_client/{$id}', 'ClientController@update_client_form');

Route::get('/delete_client/{$id}', 'ClientController@delete');


