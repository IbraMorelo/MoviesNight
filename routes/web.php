<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	
	Route::get('links', [
        'uses' => 'LinkController@index',
        'as' => 'admin.links.index'
    ]);

    Route::resource('api/links', 'Api\ApiLinkController', ['except' => [
		'create', 'edit'
	]]);

    Route::resource('people', 'PersonController');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
