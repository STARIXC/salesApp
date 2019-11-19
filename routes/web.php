<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/create', 'ProductController@create')->name('products.create');
Route::get('/store', 'ProductController@store');
