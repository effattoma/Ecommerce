<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;



// Frontend routs
Route::get('/', 'App\Http\Controllers\frontend\PagesController@index', 'index')->name('index');
Route::get('contact/', 'App\Http\Controllers\frontend\PagesController@contact', 'contact')->name('contact');


//products frontend
Route::get('product/', 'App\Http\Controllers\frontend\ProductsController@index', 'products')->name('products');

Route::get('product/{slug}', 'App\Http\Controllers\frontend\ProductsController@show')->name('products.show');




//admin routs
Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'App\Http\Controllers\backend\PagesController@index', 'index')->name('admin.index');


  //product routes
    Route::group(['prefix' => '/products'], function(){

        Route::get('/create', 'App\Http\Controllers\backend\ProductsController@create', 'create')->name('admin.product.create');
        Route::post('/store', 'App\Http\Controllers\backend\ProductsController@store', 'store')->name('admin.product.store');
        Route::get('/', 'App\Http\Controllers\backend\ProductsController@index')->name('admin.products');
        Route::get('edit/{id}', 'App\Http\Controllers\backend\ProductsController@edit')->name('admin.product.edit');
        Route::post('/update', 'App\Http\Controllers\backend\ProductsController@update')->name('admin.product.update');
        Route::post('products/edit/{id}', 'App\Http\Controllers\backend\ProductsController@update')->name('admin.product.update');
        Route::post('products/delete/{id}', 'App\Http\Controllers\backend\ProductsController@delete')->name('admin.product.delete');
    

    });
   
});