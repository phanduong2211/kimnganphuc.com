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

Route::get('/','index@getindex');
Route::get('/about-us.html','about@getabout');
Route::get('/services.html','service@getservice');
Route::get('/portfolio.html','portfolio@getportfolio');
Route::get('/blog.html','blog@getblog');
Route::get('/contact-us.html','contact@getcontact');