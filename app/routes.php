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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('login', 'SessionsController@create');

Route::get('logout', 'SessionsController@destroy');

Route::resource('sessions', 'SessionsController' , ['only' => ['create','store','destroy']]);

Route::resource('users', 'UsersController');

Route::any('/rpc', function() {
    \Bulforce\ExtDirect\ExtDirect::$url = Request::url(); //fixes a bug
    return ExtDirect::provide();
});
