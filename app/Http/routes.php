<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'web'], function () {

    Route::get('/home', 'HomeController@index');

    Route::group(['prefix' => 'admin'], function () {
        Route::auth();

        Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function () {
            Route::get('/', 'IndexController@index');
        });
    });

    require 'Routes/Admin/Shop.php';



});
