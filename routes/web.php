<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});


// routes/web.php

Route::get('/products', [ProductController::class, ' index'])->name('products.index');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::post('/products', 'ProductController@store')->name('products.store');
Route::get('/products/{id}', 'ProductController@show')->name('products.show');
Route::get('/products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::patch('/products/{id}', 'ProductController@update')->name('products.update');
Route::delete('/products/{id}', 'ProductController@destroy')->name('products.destroy');



Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/create', 'UserController@create')->name('users.create');
Route::post('/users', 'UserController@store')->name('users.store');
Route::get('/users/{id}', 'UserController@show')->name('users.show');
Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');
Route::patch('/users/{id}', 'UserController@update')->name('users.update');
Route::delete('/users/{id}', 'UserController@destroy')->name('users.destroy');

Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
Route::post('/categories', 'CategoryController@store')->name('categories.store');
Route::get('/categories/{id}', 'CategoryController@show')->name('categories.show');
Route::get('/categories/{id}/edit', 'CategoryController@edit')->name('categories.edit');
Route::patch('/categories/{id}', 'CategoryController@update')->name('categories.update');
Route::delete('/categories/{id}', 'CategoryController@destroy')->name('categories.destroy');

Route::get('/brands', 'BrandController@index')->name('brands.index');
Route::get('/brands/create', 'BrandController@create')->name('brands.create');
Route::post('/brands', 'BrandController@store')->name('brands.store');
Route::get('/brands/{id}', 'BrandController@show')->name('brands.show');
Route::get('/brands/{id}/edit', 'BrandController@edit')->name('brands.edit');
Route::patch('/brands/{id}', 'BrandController@update')->name('brands.update');
Route::delete('/brands/{id}', 'BrandController@destroy')->name('brands.destroy');


Route::get('/orders', 'OrderController@index')->name('orders.index');
Route::get('/orders/create', 'OrderController@create')->name('orders.create');
Route::post('/orders', 'OrderController@store')->name('orders.store');
Route::get('/orders/{id}', 'OrderController@show')->name('orders.show');
Route::get('/orders/{id}/edit', 'OrderController@edit')->name('orders.edit');
Route::patch('/orders/{id}', 'OrderController@update')->name('orders.update');
Route::delete('/orders/{id}', 'OrderController@destroy')->name('orders.destroy');

Route::get('/payment-methods', 'PaymentMethodController@index')->name('payment-methods.index');
Route::get('/payment-methods/create', 'PaymentMethodController@create')->name('payment-methods.create');
Route::post('/payment-methods', 'PaymentMethodController@store')->name('payment-methods.store');
Route::get('/payment-methods/{id}', 'PaymentMethodController@show')->name('payment-methods.show');
Route::get('/payment-methods/{id}/edit', 'PaymentMethodController@edit')->name('payment-methods.edit');
Route::patch('/payment-methods/{id}', 'PaymentMethodController@update')->name('payment-methods.update');
Route::delete('/payment-methods/{id}', 'PaymentMethodController@destroy')->name('payment-methods.destroy');

Route::get('/shipping-addresses', 'ShippingAddressController@index')->name('shipping-addresses.index');
Route::get('/shipping-addresses/create', 'ShippingAddressController@create')->name('shipping-addresses.create');
Route::post('/shipping-addresses', 'ShippingAddressController@store')->name('shipping-addresses.store');
Route::get('/shipping-addresses/{id}', 'ShippingAddressController@show')->name('shipping-addresses.show');
Route::get('/shipping-addresses/{id}/edit', 'ShippingAddressController@edit')->name('shipping-addresses.edit');
Route::patch('/shipping-addresses/{id}', 'ShippingAddressController@update')->name('shipping-addresses.update');
Route::delete('/shipping-addresses/{id}', 'ShippingAddressController@destroy')->name('shipping-addresses.destroy');

Route::get('/coupons', 'CouponController@index')->name('coupons.index');
Route::get('/coupons/create', 'CouponController@create')->name('coupons.create');
Route::post('/coupons', 'CouponController@store')->name('coupons.store');



Route::get('/coupons/{id}', 'CouponController@show')->name('coupons.show');
Route::get('/coupons/{id}/edit', 'CouponController@edit')->name('coupons.edit');
Route::patch('/coupons/{id}', 'CouponController@update')->name('coupons.update');
Route::delete('/coupons/{id}', 'CouponController@destroy')->name('coupons.destroy');

Route::get('/reviews', 'ReviewController@index')->name('reviews.index');
Route::get('/reviews/create', 'ReviewController@create')->name('reviews.create');
Route::post('/reviews', 'ReviewController@store')->name('reviews.store');
Route::get('/reviews/{id}', 'ReviewController@show')->name('reviews.show');
Route::get('/reviews/{id}/edit', 'ReviewController@edit')->name('reviews.edit');
Route::patch('/reviews/{id}', 'ReviewController@update')->name('reviews.update');
Route::delete('/reviews/{id}', 'ReviewController@destroy')->name('reviews.destroy');

Route::get('/wishlists', 'WishlistController@index')->name('wishlists.index');
Route::get('/wishlists/create', 'WishlistController@create')->name('wishlists.create');
Route::post('/wishlists', 'WishlistController@store')->name('wishlists.store');
Route::get('/wishlists/{id}', 'WishlistController@show')->name('wishlists.show');
Route::get('/wishlists/{id}/edit', 'WishlistController@edit')->name('wishlists.edit');
Route::patch('/wishlists/{id}', 'WishlistController@update')->name('wishlists.update');
Route::delete('/wishlists/{id}', 'WishlistController@destroy')->name('wishlists.destroy');

Route::get('/frontend', 'FrontendController@index')->name('frontend.index');
Route::get('/frontend/{id}', 'FrontendController@show')->name('frontend.show');
