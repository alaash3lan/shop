<?php

use Illuminate\Http\Request;

//use Cart;
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

//Route::get('/', function () {
//
//
//
//    return view('layouts.store');
//});

Route::get('/cart', 'CartController@index')->name('cart');

Route::resource('/', 'StoreController');
Route::resource('/subcategory', 'ShowProductsController');
Route::resource('/subcategory/product', 'Product');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search', function (Request $request) {
    $result = App\Product::search($request->search)->get();

    return view('store.search', compact('result'));
})->name('search');

Route::group(['middleware' => 'role'], function () {
    Route::resource('admin/products', 'AdminProductsController');
    Route::resource('admin/users', 'AdminUsersController');
    Route::resource('admin/categories', 'SubcategoriesController');

    Route::get('/admin', function () {
        return view('layouts.admin');
    });
});

Route::post('/cart', 'CartController@store')->name('cart.store');

Route::get('/login/facebook', 'Auth\LoginController@redirectToProvider');

Route::get('/login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
