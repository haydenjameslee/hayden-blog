<?php

/**
 * Repository bindings
 */
App::bind('PostRepositoryInterface', 'PostRepository');
App::bind('ProjectRepositoryInterface', 'ProjectRepository');

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

// Posts from old blog
Route::get('/my-isp-access-media-3-admitting-to-man-in-the-middle-attack', 'PostsController@IspPost2');
Route::get('/evidence-my-isp-may-be-making-money-from-tracking-its-customers/', 'PostsController@IspPost');

// Home
Route::get('/', 'HomeController@home');

// Blog
Route::get('/blog', 'PostsController@index');
Route::get('/blog/posts', 'PostsController@range');

// Projects
Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/range', 'ProjectsController@range');
Route::get('/projects/{slug}', 'ProjectsController@show');


// Blog Posts
Route::get('/{slug}', 'PostsController@show');