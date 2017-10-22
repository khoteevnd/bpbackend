<?php

Route::get('/', function () {
    return view('welcome');
});
//Route::middleware(['locate'])->group(function () {
    Route::prefix('uk')->group(function () {
        Route::resource('/photos', 'PhotoController');
        Route::resource('/albums', 'AlbumsController');
    });

    Route::prefix('en')->group(function () {
        Route::resource('/photos', 'PhotoController');
        Route::resource('/albums', 'AlbumsController');
    });

    Route::resource('/photos', 'PhotoController');
    Route::resource('/albums', 'AlbumsController');
//});

Auth::routes();
Route::get('profile', 'UserController@profile')->name('profile');
Route::post('profile', 'UserController@update_avatar');

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/','FrontController@index');
/*Route::get('/products','FrontController@products');
Route::get('/products/details/{id}','FrontController@product_details');
Route::get('/products/categories','FrontController@product_categories');
Route::get('/products/brands','FrontController@product_brands');
Route::get('/blog','FrontController@blog');
Route::get('/blog/post/{id}','FrontController@blog_post');
Route::get('/contact-us','FrontController@contact_us');
Route::get('/login','FrontController@login');
Route::get('/logout','FrontController@logout');
Route::get('/cart','FrontController@cart');
Route::get('/checkout','FrontController@checkout');
Route::get('/search/{query}','FrontController@search');*/