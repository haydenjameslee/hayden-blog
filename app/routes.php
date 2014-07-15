<?php

/**
 * Repository bindings
 */
App::bind('PostRepositoryInterface', 'PostRepository');

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

// Home
Route::get('/', 'HomeController@home');

// Blog
Route::get('/blog', 'PostsController@index');
Route::get('/blog/posts', 'PostsController@range');
Route::get('/{slug}', 'PostsController@show');