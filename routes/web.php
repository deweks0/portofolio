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

Route::get('/', 'AppController@index')->name('/');
Route::get('/about', 'AppController@about')->name('about');
Route::get('/news-update', 'AppController@news')->name('news');
Route::get('/inquiries', 'AppController@inquiries')->name('inquiries');
Route::get('/project-{page}', 'AppController@detailProject')->name('project');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::prefix('admin')->namespace('Admin')->middleware(['auth'])->group(function () {
	Route::get('/home', 'HomeController@index')->name('home');

	Route::resource('/images', 'ImageController', ['except' => ['create', 'show', 'edit', 'update']]);
	Route::resource('/pages', 'PageController');
	Route::post('/slides/update-slide', 'SlideController@updateSlide')->name('slides.update_slide');

	Route::put('/slides/update', 'SlideController@update')->name('slides.update');

	Route::resource('/pages/{page}/projectDetails', 'ProjectDetailController', ['except' => 'index', 'show', 'edit']);
	Route::get('/pages/{page}/projectDetails/{projectDetail}/edit-image', 'ProjectDetailController@editImage')->name('projectDetails.edit_image');
	Route::put('/pages/{page}/projectDetails/{projectDetail}', 'ProjectDetailController@updateImage')->name('projectDetails.update_image');

	Route::get('/pages/main/about', 'PageController@about')->name('pages.about');
	Route::get('/pages/main/about/choose-image', 'PageController@chooseImage')->name('pages.choose_image');
	Route::post('/pages/main/about/choose-image', 'PageController@updateImage')->name('pages.update_image');
	Route::delete('/pages/main/about', 'PageController@deleteImage')->name('pages.delete_image');
	Route::get('/pages/main/news-update', 'PageController@news')->name('pages.news');
	Route::get('/pages/main/inquiries', 'PageController@inquiries')->name('pages.inquiries');
});
