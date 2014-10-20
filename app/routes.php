<?php

    // Pages
    Route::get('/', ['as' => 'pages.index', 'uses' => 'PagesController@index']);
    Route::get('news', ['as' => 'pages.news', 'uses' => 'PagesController@news']);
//    Route::get('error/{type}', ['as' => 'pages.error', 'uses' => 'PagesController@error']);

    // Users
    Route::resource('users', 'UsersController');
    Route::get('login', ['as' => 'login', 'uses' => 'SessionsController@create']);
    Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
    Route::resource('sessions', 'SessionsController');

    // Orders
    Route::resource('orders', 'OrdersController');