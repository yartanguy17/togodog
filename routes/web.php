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
Route::get('/toilettage','website\HomeController@toillettag')->name('toilettage');
Route::post('/add-toilettage','website\HomeController@saveToillettag')->name('addtoilettage');
Route::get('/shop','website\ShopController@index')->name('shop');
Route::get('/product-detail/{id}','website\ProductController@index')->name('product-detail');
Route::get('/alimentation','website\ProductController@getAlimentation')->name('alimentation');


Route::get('/admin/dashboard','admin\DashboardController@index');
// User
Route::get('/add.user','admin\UserController@add')->name('adduser');
Route::get('/users','admin\UserController@index')->name('user');
// Banner
Route::get('/banners','admin\BannerController@index')->name('banner');
Route::get('/create.banner','admin\BannerController@add')->name('create.banner');
Route::get('/show.banner/{id}','admin\BannerController@show')->name('show.banner');
Route::post('/save.banner','admin\BannerController@saveBanner')->name('add.banner');
// catégorie
Route::get('/create.categorys','admin\CategoryController@add')->name('addcategory');
Route::post('/add.categorys','admin\CategoryController@save')->name('add.category');
Route::get('/categorys','admin\CategoryController@index')->name('category');
Route::get('/add.subcategorys','admin\SubCategoryController@add')->name('addsubcategory');
Route::get('/subcategorys','admin\SubCategoryController@index')->name('subcategory');
// Product
Route::get('/add.product','admin\ProductController@add')->name('addproduct');
Route::post('/product','admin\ProductController@save')->name('saveproduct');
Route::get('/products','admin\ProductController@index')->name('products');
Route::get('/reservation','admin\ReservationController@index')->name('reservation');
