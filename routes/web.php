<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;




Route::get('/', 'App\Http\Controllers\PagesController@index', 'index')->name('index');
Route::get('product/', 'App\Http\Controllers\PagesController@products', 'products')->name('products');
Route::get('contact/', 'App\Http\Controllers\PagesController@contact', 'contact')->name('contact');

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'App\Http\Controllers\AdminPagesController@index', 'index')->name('admin.index');
    Route::get('/product/create/', 'App\Http\Controllers\AdminPagesController@product_create', 'create')->name('admin.product.create');
    Route::post('/product/store/', 'App\Http\Controllers\AdminPagesController@product_store', 'store')->name('admin.product.store');
    Route::get('/product', 'App\Http\Controllers\AdminPagesController@manage_products')->name('admin.products');
    Route::get('/product/edit/{id}', 'App\Http\Controllers\AdminPagesController@edit_product')->name('admin.product.edit');
    Route::post('/product/edit/{id}', 'App\Http\Controllers\AdminPagesController@product_update', 'update')->name('admin.product.update');
});

