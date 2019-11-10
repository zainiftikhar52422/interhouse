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
    return view('index2');
});	

Route::get('/product', function () {
    return view('product2');
});	

Route::get('/shoping-cart', function () {
    return view('shoping-cart2');
});	
Route::get('/product-detail', function () {
    return view('product-detail2');
});	