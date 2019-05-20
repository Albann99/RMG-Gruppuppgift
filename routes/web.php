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

Route::resource('/bookings', 'BookingController');

Route::resource('/categories', 'CategoryController');
Route::resource('/articles', 'ArticleController');

Route::middleware(['auth'])->group(function() { 
Route::get('/dashboard', 'DashboardController@index');
});

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');