<?php
/**
 * Shop 商城系统
 */
Route::group(['prefix' => 'admin/Shop','namespace' => 'Admin\Shop'], function () {

//商品品牌
    Route::group(['prefix' => 'brand'], function () {
        Route::patch('sort_order', 'BrandController@sort_order');
        Route::patch('is_something', 'BrandController@is_something');
    });
    Route::resource('brand', 'BrandController');

//栏目管理
    Route::group(['prefix' => 'category'], function () {
        Route::patch('sort_order', 'CategoryController@sort_order');
        Route::patch('is_something', 'CategoryController@is_something');
    });
    Route::resource('category', 'CategoryController');
});
