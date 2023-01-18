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
    Route::get('abut', 'abut')->name('abut');
    Route::get('contact', 'contact')->name('contact');
    Route::post('add-toilettage', 'saveToillettag')->name('addtoilettage');
    Route::get('put-in-cart', 'putItemInSession')->name('put-in-cart');
  });

  Route::get('/shop', 'website\ShopController@index')->name('shop');
  Route::get('/product-detail/{id}', 'website\ProductController@index')->name('product-detail');
  Route::get('/product-category/{id}', 'website\ShopController@shopByCategory')->name('product-category');
  Route::get('/alimentation', 'website\ProductController@getAlimentation')->name('alimentation');
  Route::get('/panier', 'website\CartController@index')->name('view.panier');
  Route::get('/commande', 'website\TchekoutController@index')->name('view.order');


// Socialite
// Route::get('login/{provider}/', 'Auth\LoginController@redirect')->name('login.redirect');
// Route::get('login/{provider}/callback/', 'Auth\LoginController@Callback')->name('login.callback');
// Route::get('login', 'auth\LoginController@getLogin')->name('login');


Route::get('/admin/login', 'Auth\LoginController@index')->name('login-view');
Route::post('login', 'Auth\LoginController@checkCredentials')->name('login.check');
Route::post('logout', 'Auth\LoginController@destroyAccess')->name('logout');

Route::prefix('admin')->middleware(['auth','admin'])->group(function(){

    Route::get('dashboard', 'admin\DashboardController@index')->name('dashboard');
    // User
    Route::get('add.user', 'admin\UserController@add')->name('adduser');
    Route::get('users', 'admin\UserController@index')->name('user');

    // Banner

      Route::get('banners', 'admin\BannerController@index')->name('banner');
      Route::get('create.banner', 'admin\BannerController@add')->name('create.banner');
      Route::get('show.banner/{id}', 'admin\BannerController@show')->name('show.banner');
      Route::post('save.banner', 'admin\BannerController@saveBanner')->name('add.banner');
      Route::put('banner/{banner}', 'admin\BannerController@update')->name('banner.update');
      Route::delete('banner/{banner}', 'admin\BannerController@destroy');


    // catégorie

      Route::get('create.categorys', 'admin\CategoryController@add')->name('addcategory');
      Route::post('add.categorys', 'admin\CategoryController@save')->name('add.category');
      Route::get('categorys', 'admin\CategoryController@index')->name('category');
      Route::get('category/{category}', 'admin\CategoryController@show')->name('category.show');
      Route::get('category/{category}/edit', 'admin\CategoryController@edit')->name('category.edit');
      Route::put('category/{category}', 'admin\CategoryController@update')->name('category.update');
      Route::delete('category/{category}', 'admin\CategoryController@destroy')->name('category.delete');


    // Sous-catégorie

      Route::get('subcategorys', 'admin\SubCategoryController@index')->name('subcategory');
      Route::get('subcategorys/{subCategory}', 'admin\SubCategoryController@show')->name('subCategory.show');
      Route::get('add.subcategorys', 'admin\SubCategoryController@add')->name('addsubcategory');
      Route::post('subcategorys/{subCategory}', 'admin\SubCategoryController@store')->name('subCategory.store');
      Route::get('subcategorys/{subCategory}', 'admin\SubCategoryController@edit')->name('subCategory.edit');
      Route::put('subcategorys/{subCategory}', 'admin\SubCategoryController@update')->name('subCategory.update');
      Route::delete('subcategorys/{subCategory}', 'admin\SubCategoryController@destroy')->name('subCategory.delete');


    // Product

      Route::get('add.product', 'admin\ProductController@add')->name('addproduct');
      Route::post('product', 'admin\ProductController@save')->name('saveproduct');
      Route::get('products', 'admin\ProductController@index')->name('products');
      Route::get('products/{product}','admin\ProductController@show')->name('products.show');
      Route::get('products/{product}/edit','admin\ProductController@edit')->name('products.edit');
      Route::put('products/{product}','admin\ProductController@update')->name('products.update');
      Route::delete('products/{product}','admin\ProductController@destroy')->name('products.delete');


    // reservation/Toilettage

      Route::get('reservations', 'admin\ReservationController@index')->name('reservations');
      Route::get('reservations/create', 'admin\ReservationController@create')->name('reservations.create');
      Route::get('reservations/{toilettag}', 'admin\ReservationController@show')->name('reservations.show');
      Route::get('reservations/{toilettag}/edit', 'admin\ReservationController@edit')->name('reservations.edit');
      Route::post('reservations', 'admin\ReservationController@store')->name('reservations.store');
      Route::put('reservations/{toilettag}', 'admin\ReservationController@update')->name('reservations.update');
      Route::delete('reservations/{toilettag}', 'admin\ReservationController@destroy')->name('reservations.delete');

    // Commande

    Route::get('commande', 'admin\OrderController@index')->name('commande');

    // Video

    Route::get('video-upload', 'admin\VideosController@getVideoUploadForm')->name('get.video.upload');
    Route::post('video-upload', 'admin\VideosController@uploadVideo')->name('store.video');

    // Video

    Route::get('alimentation', 'admin\FoodController@index')->name('get.food');
    Route::get('ajouter-alimentation', 'admin\FoodController@create')->name('create.food');
    Route::post('alimentation', 'admin\FoodController@save')->name('store.food');

//   });
});

// require __DIR__ . '/auth.php';
