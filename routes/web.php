<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','website\HomeController@index')->name('home');
Route::get('/shop','website\ShopController@index')->name('shop');
Route::get('/product-detail','website\ProductController@index')->name('product-detail');
Route::get('/alimentation','website\ProductController@getAlimentation')->name('alimentation');


Route::get('/admin/dashboard','admin\DashboardController@index');

Route::get('/add.user','admin\UserController@add')->name('adduser');
Route::get('/users','admin\UserController@index')->name('user');
Route::get('/create.categorys','admin\CategoryController@add')->name('addcategory');
Route::post('/add.categorys','admin\CategoryController@add')->name('add.category');
Route::get('/categorys','admin\CategoryController@add')->name('category');
Route::get('/add.subcategorys','admin\SubCategoryController@add')->name('addsubcategory');
Route::get('/subcategorys','admin\SubCategoryController@index')->name('subcategory');
Route::get('/add.product','admin\ProductController@add')->name('addproduct');
Route::get('/products','admin\ProductController@index')->name('products');
