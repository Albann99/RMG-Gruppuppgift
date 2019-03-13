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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


Route::get('/bookings/thankyou', function () {
	return view('bookings/thankyou');
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

Route::resource('/bookings', 'BookingController');

Route::middleware(['auth'])->group(function() {
Route::get('/articles/myarticles', function () {
	return view('/articles/myarticles');
});
});

Route::get('/category/bil', function () {
	return view('category/bil');
});

Route::get('/category/bil', function () {
	return view('category/bil');
});

Auth::routes();
Route::resource('/categories', 'CategoryController');


});

Route::resource('/categories', 'CategoryController');

Route::resource('/categories', 'CategoryController');


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/articles', 'ArticleController');
Route::post('/bookings', 'BookingController@store');

Route::get('/dashboard', 'DashboardController@index');

Route::middleware(['auth'])->group(function() {
Route::get('/dashboard', 'DashboardController@index');
});
