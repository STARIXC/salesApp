<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function(){
    return view('application.dashboard');
});
Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/create', 'ProductController@create')->name('products.create');
Route::post('/store', 'ProductController@store');
Route::get('/sales', 'SalesController@index')->name('sales.index');
