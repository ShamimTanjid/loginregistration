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

Route::get('/', function () {
    return redirect()->route('login');
});

//Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/product','ProductController@index');
Route::post('/InsertProduct','ProductController@ProductInsert')->name('Insert-product');
Route::get('/productview','ProductController@viewproduct');
Route::get('/product-view/{id}','ProductController@viewproductsngl');
Route::get('/product-delete/{id}','ProductController@Deltep');
Route::get('/product-edite/{id}','ProductController@editproduct');
Route::post('/product-update/{id}','ProductController@updateeproduct');