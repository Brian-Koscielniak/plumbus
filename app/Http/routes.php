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
// Related to displaying content
Route::get('/', 'PagesController@home'); // Route to display Home page
Route::get('about', 'PagesController@about'); // Route to display About page

/* ------------------------------------------------------------------------
| News Routes : News views related Routing
|----------------------------------------------------------------------- */
// Related to displaying content
Route::get('news', 'NewsController@index'); // Route to display News page
Route::get('news/{news}', 'NewsController@show'); // Route to display a specific new article

// Related to creating, or edit content.
Route::post('news', 'NewsController@store'); // Route that 'Make News' form submits to
Route::post('news/{news}/image', 'NewsController@image'); // Route to assign a related image
Route::get('news/{news}/edit', 'NewsController@edit'); // Route to edit an existing news Item
Route::patch('news/{news}', 'NewsController@update'); // Route to edit an existing news Item
Route::get('news/{news}/delete', 'NewsController@delete'); // Route to delete a specific new article
/* End News Routes */

Route::get('events', 'PagesController@events'); // Route to display Events page
