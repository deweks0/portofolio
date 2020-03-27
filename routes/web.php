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

Route::get('/', 'AppController@index');
Route::get('/about-lab', 'AppController@about');
Route::get('/news-update', 'AppController@news');
Route::get('/inquiries', 'AppController@inquiries');
Route::get('/project-{page}', 'AppController@detailProject');

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
	Route::resource('/pages', 'PageController');
	Route::get('/pages/main/about', 'PageController@about')->name('pages.about');
	Route::get('/pages/main/about/choose-image', 'PageController@chooseImage')->name('pages.choose_image');
	Route::post('/pages/main/about', 'PageController@updateImage')->name('pages.update_image');
	Route::delete('/pages/main/about', 'PageController@deleteImage')->name('pages.delete_image');
	Route::get('/pages/main/news-update', 'PageController@news')->name('pages.news');
	Route::get('/pages/main/inquiries', 'PageController@inquiries')->name('pages.inquiries');
});
