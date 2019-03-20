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
    return view('/welcome');
})->name('/');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/orders', function () {
    return view('orders');
})->name('orders');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/contact', 'HomeController@sendMail')->name('postContact');
