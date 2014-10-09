<?php

    Route::get('/', ['as' => 'pages.index', 'uses' => 'PagesController@index']);
    Route::get('news', ['as' => 'pages.news', 'uses' => 'PagesController@news']);

    // Users
    Route::resource('users', 'UsersController');

    Route::get('login', ['as' => 'login', 'uses' => 'SessionsController@create']);
    Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
    Route::resource('sessions', 'SessionsController');

    Route::get('admin', 'PagesController@admin')->before('auth');
    //$router->get('/', 'PagesController@index');
    //$router->get('about', 'PagesController@about');

    //Facade
    //Route::get();
    //get('songs', 'SongsController@index');
