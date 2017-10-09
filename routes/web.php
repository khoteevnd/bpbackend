<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('photos', 'PhotoController');

//Route::redirect('/', 'there', 200);

Route::get('/there', function(){
	return 'there';
});

Auth::routes();
Route::get('profile', 'UserController@profile');
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