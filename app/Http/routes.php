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

Route::get('/', function () {
    return view('welcome');
});

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

    Route::get('/home', 'HomeController@index');


    Route::group(['prefix' => 'admin'], function () {
        Route::auth();


        Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function () {
            Route::get('/', 'IndexController@index');
        });
    });

//商品品牌
    Route::group(['prefix' => 'admin/Shop','namespace' => 'Admin\Shop'], function () {

        Route::resource('brand', 'BrandController');

    });



});
