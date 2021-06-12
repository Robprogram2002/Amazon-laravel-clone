<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
Route::get('/category/{id}', 'CategoryController@show')->name('show.category');
Route::get('/product/image/{filename}', 'ProductController@image')->name('product.image');
Route::get('/category/{category_id}/subcategory/{id}', 'CategoryController@showSubcategory')->name('show.subcategory');
Route::get('/category/{category_id}/seller/{id}', 'SellerController@products')->name('product.seller');
Route::get('/category/{category_id}/products/{number1}/{number2}', 'CategoryController@prices')->name('products.price');
Route::get('/subcategory/{file}', 'CategoryController@subImage')->name('subcategory');
Route::get('/category/{category_id}/subcategory/{subcategory_id}/product/{id}', 'ProductController@show')->name('product.view');
Route::get('/cart/{user}', 'CardController@index')->name('cart.show');
Route::get('/wishlist/{user}', 'WishController@index')->name('wish.show');
Route::get('comment/image/{filename}', 'CommentController@image')->name('comment.image');

Route::get('/admin/category', 'CategoryController@index')->name('admin.category');
Route::get('/admin/category/{filename}', 'CategoryController@image')->name('category.img');
Route::get('/admin/category/detail/{id}', 'CategoryController@detail')->name('category.detail');
Route::get('/admin/subcategory', 'CategoryController@subcategory')->name('admin.subcategory');
Route::get('/admin/tags','CategoryController@tag')->name('admin.tag');
Route::get('/admin/seller', 'SellerController@index')->name('seller.create');
Route::get('/admin/seller/detail/{id}', 'SellerController@detail')->name('seller.detail');
Route::get('/admin/seller/image/{filename}', 'SellerController@image')->name('seller_img');
Route::get('/admin/product/create', 'ProductController@create')->name('product.create');