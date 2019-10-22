<?php

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

Route::get('/', 'FrontpageController@index');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    //Admin
    Route::get('/home', 'HomeController@index')->name('home'); 
  
    Route::get('/admin/product/create', 'ProductController@add')->name('product.add');
    Route::post('/admin/product/create', 'ProductController@store')->name('product.store');
    Route::get('/admin/product/index', 'ProductController@index')->name('product.index');

    Route::get('/admin/order/index', 'OrderDetailController@index')->name('orderdetail.index');
    Route::get('/admin/order/detail/{id}', 'OrderDetailController@detail')->name('order.detail');
    Route::get('/admin/order/lunas/{id}', 'OrderDetailController@lunas')->name('order.lunas');
    Route::get('delete/{id}', 'ProductController@destroy')->name('delete');
    
    //User
    Route::get('/user/index', 'UserController@user')->name('user');

    Route::get('/order/create', 'OrderController@create')->name('order.create');
    Route::post('/order/create', 'OrderController@store')->name('order.store');
    Route::get('/user/payment', 'OrderController@index')->name('order.index');
    Route::get('/user/verify', 'OrderController@verify')->name('order.verify');
    Route::get('delete/{id}', 'OrderController@destroy')->name('delete');
   
});
