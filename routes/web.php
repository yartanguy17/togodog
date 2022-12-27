<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

// Groupe de routes générées par Breeze
Route::get('/', function () {
  return view('welcome');
});

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth'])->name('dashboard');


  Route::controller('website\HomeController')->group(function() {
    Route::get('/', 'index')->name('home');
    Route::get('toilettage', 'toillettag')->name('toilettage');
    Route::post('add-toilettage', 'saveToillettag')->name('addtoilettage');
    Route::get('put-in-cart', 'putItemInSession')->name('put-in-cart');
  });

  Route::get('/shop', 'website\ShopController@index')->name('shop');
  Route::get('/product-detail/{id}', 'website\ProductController@index')->name('product-detail');
  Route::get('/product-category/{id}', 'website\ShopController@shopByCategory')->name('product-category');
  Route::get('/alimentation', 'website\ProductController@getAlimentation')->name('alimentation');


// Socialite
// Route::get('login/{provider}/', 'Auth\LoginController@redirect')->name('login.redirect');
// Route::get('login/{provider}/callback/', 'Auth\LoginController@Callback')->name('login.callback');
// Route::get('login', 'auth\LoginController@getLogin')->name('login');
Route::prefix('admin')->group(function () {
  
  // Route::namespace('Auth')->group(function () {
  //   Route::get('login', 'LoginController@getLogin')->name('login');
  //   Route::post('login', 'LoginController@postLogin')->name('login');
  // });

  Route::middleware(['auth:admin','prevent', 'admin'])->namespace('Admin')->group(function () {
    // Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    // User
    Route::get('add.user', 'UserController@add')->name('adduser');
    Route::get('users', 'UserController@index')->name('user');

    // Banner
    Route::controller('BannerController')->group(function () {
      Route::get('banners', 'index')->name('banner');
      Route::get('create.banner', 'add')->name('create.banner');
      Route::get('show.banner/{id}', 'show')->name('show.banner');
      Route::post('save.banner', 'saveBanner')->name('add.banner');
      Route::put('banner/{banner}', 'update')->name('banner.update');
      Route::delete('banner/{banner}', 'destroy');
    });

    // catégorie
    Route::controller('CategoryController')->group(function () {
      Route::get('create.categorys', 'add')->name('addcategory');
      Route::post('add.categorys', 'save')->name('add.category');
      Route::get('categorys', 'index')->name('category');
      Route::get('category/{category}', 'show')->name('category.show');
      Route::get('category/{category}/edit', 'edit')->name('category.edit');
      Route::put('category/{category}', 'update')->name('category.update');
      Route::delete('category/{category}', 'destroy')->name('category.delete');
    });

    // Sous-catégorie
    Route::controller('SubCategoryController')->group(function () {
      Route::get('subcategorys', 'index')->name('subcategory');
      Route::get('subcategorys/{subCategory}', 'show')->name('subCategory.show');
      Route::get('add.subcategorys', 'add')->name('addsubcategory');
      Route::post('subcategorys/{subCategory}', 'store')->name('subCategory.store');
      Route::get('subcategorys/{subCategory}', 'edit')->name('subCategory.edit');
      Route::put('subcategorys/{subCategory}', 'update')->name('subCategory.update');
      Route::delete('subcategorys/{subCategory}', 'destroy')->name('subCategory.delete');
    });

    // Product
    Route::controller('ProductController')->group(function () {
      Route::get('add.product', 'ProductController@add')->name('addproduct');
      Route::post('product', 'ProductController@save')->name('saveproduct');
      Route::get('products', 'ProductController@index')->name('products');
      Route::get('products/{product}','show')->name('products.show');
      Route::get('products/{product}/edit','edit')->name('products.edit');
      Route::put('products/{product}','update')->name('products.update');
      Route::delete('products/{product}','destroy')->name('products.delete');
    });

    // reservation/Toilettage
    Route::controller('ReservationController')->group(function() {
      Route::get('reservations', 'index')->name('reservations');
      Route::get('reservations/create', 'create')->name('reservations.create');
      Route::get('reservations/{toilettag}', 'show')->name('reservations.show');
      Route::get('reservations/{toilettag}/edit', 'edit')->name('reservations.edit');
      Route::post('reservations', 'store')->name('reservations.store');
      Route::put('reservations/{toilettag}', 'update')->name('reservations.update');
      Route::delete('reservations/{toilettag}', 'destroy')->name('reservations.delete');
    });
  });
});

require __DIR__ . '/auth.php';
