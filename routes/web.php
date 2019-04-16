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

Route::get('/', 'FrontEndController@index')->name('/');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/equipment', 'FrontEndController@equipment')->name('equipment');

Route::post('/contact', 'FrontEndController@sendMail')->name('postContact');

Auth::routes();

Route::get('/home', 'BackEndController@home')->name('home');

Route::get('/profile', 'BackEndController@profile')->name('profile');
Route::patch('/profile', 'BackEndController@profile')->name('postProfile');

//Route::get('/profile', function () {
//    return view('profile');
//})->name('profile');

Route::get('/orders', 'BackEndController@orders')->name('orders');

Route::post('/addToCart', 'BackEndController@addToCart');

Route::get('/checkCart', 'BackEndController@checkCart');



