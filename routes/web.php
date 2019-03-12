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
    return view('welcome');
});

Route::get('category', function () {
    return view('category');
});
Route::get('/category/bil', function () {
    return view('category/bil');
});
Route::get('/category/båt', function () {
    return view('category/båt');
});
Route::get('/category/konsoler', function () {
    return view('category/konsoler');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
