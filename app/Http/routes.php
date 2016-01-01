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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('admin/categories', 'AdminCategoriesController@index');
//Route::get('admin/products', 'AdminProductsController@index');

Route::group(['prefix'=> 'admin'], function() {

    Route::group(['prefix'=> 'categories'], function() {
        Route::get('/', ['as'=> 'admincategories', 'uses'=> 'AdminCategoriesController@index']);
    });

    Route::group(['prefix'=> 'products'], function() {
        Route::get('/', ['as'=> 'adminproduct', 'uses'=> 'AdminProductsController@index']);
    });
});
