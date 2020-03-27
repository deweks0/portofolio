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

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::prefix('admin')->namespace('Admin')->middleware(['auth'])->group(function () {
	Route::get('/home', 'HomeController@index')->name('home');

	Route::resource('/images', 'ImageController');
	Route::resource('/pages', 'pageController');
	Route::get('/page/detail', 'PageImageController@detail')->name('detail');
	Route::get('/page/about', 'PageImageController@about')->name('about');
	Route::put('/page/updateimage/{image}', 'PageImageController@UpdateImage')->name('imageUpdate');
});
