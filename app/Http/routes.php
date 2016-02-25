<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    //Route::auth();
	Route::get('/', 'PagesController@getIndex');
	Route::get('/home', 'PagesController@getIndex');
	Route::get('/about', 'PagesController@getAbout');
	Route::get('/contact', 'PagesController@getContact');
	Route::resource('posts', 'PostController');
});