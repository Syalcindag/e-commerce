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

Route::get('/', 'HomeController@index')->name('homepage');
Route::get('/category/{slug_categoryname}','CategoryController@index')->name('categorypage');
Route::get('/product-detail/{slug_productname}', 'ProductController@index')->name('productpage');

Route::view('/category', 'category');
Route::view('/cart', 'cart');
Route::view('/product-detail', 'product-detail');