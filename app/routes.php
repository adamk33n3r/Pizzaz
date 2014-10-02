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

$router->get('/', 'PagesController@index');
// You can insert the view right here. Good for simple actions.
//$router->get('/', function() {
//    return view('pages.home');
//});
$router->get('about', 'PagesController@about');

//Facade
//Route::get();
Route::bind('song', function($slug) {
    return App\Song::whereSlug($slug)->first();
});
get('songs', 'SongsController@index');
get('songs/{song}', 'SongsController@show');
get('songs/{song}/edit', 'SongsController@edit');

Route::get('/', function() {
    return "hello";
});
