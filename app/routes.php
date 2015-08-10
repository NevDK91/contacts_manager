<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('/list', function(){
	 return View::make('list');
});

Route::get('/add', function(){
	 return View::make('index');
});

Route::get('/contacts', 'ContactsController@index');

Route::get('/contacts/{id}', 'ContactsController@show');

Route::get('/contacts/{id}', 'ContactsController@show');

Route::post('/contacts/', 'ContactsController@store');

Route::put('/contacts/{id}', 'ContactsController@update');

Route::delete('/contacts/{id}', 'ContactsController@destroy');

