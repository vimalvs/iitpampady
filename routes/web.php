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


Auth::routes();

Route::group(['middleware' => 'is_admin'], function(){
	Route::get('admin/home', 'AdminController@adminHome')->name('admin.home');

	Route::get('admin/banner', 'BannerController@banner');
	Route::get('admin/banner/{banner}', 'BannerController@index');
	Route::get('admin/banner/destroy/{banner}', 'BannerController@destroy')->name('banner-delete');
	Route::post('admin/banner', 'BannerController@store')->name('manage-banner');

	Route::resource('admin/course', 'CourseController');
	Route::resource('admin/news', 'NewsController');
	Route::resource('admin/gallery', 'GalleryController');
	Route::post('admin/gallery-image', 'GalleryController@uploadImage')->name('add-gallery-image');
	Route::get('admin/gallery-image/destroy/{image}', 'GalleryController@destroyImage')->name('delete-gallery-image');

	Route::get('admin/company', 'PlacementController@company');
	Route::post('admin/company/', 'PlacementController@storeCompany')->name('manage-company');
	Route::get('admin/company/destroy/{company}', 'PlacementController@destroyCompany')->name('company-delete');

	Route::get('admin/page', 'CmsPageController@index')->name('page.index');
	Route::get('admin/page/{page}', 'CmsPageController@view');
	Route::post('admin/page/{page}', 'CmsPageController@update')->name('page.edit');

	Route::get('admin/messages', 'MessageController@index')->name('message.index');
	Route::get('admin/messages/{message}', 'MessageController@view');
	Route::get('admin/messages/destroy/{message}', 'MessageController@destroy')->name('message.destroy');

	Route::get('admin/committee', 'AdministrationController@index');
	Route::post('admin/committee', 'AdministrationController@store')->name('manage-board-member');
	Route::get('admin/committee/destroy/{member}', 'AdministrationController@destroy')->name('member-remove');

});


Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about');
Route::get('/courses', 'HomeController@courses');
Route::get('/courses/{course}', 'HomeController@course')->name('course');
Route::get('/gallery', 'HomeController@galleryHome');
Route::get('/gallery/{gallery}', 'HomeController@gallery')->name('gallery');
Route::get('/news/', 'HomeController@newsHome');
Route::get('/news/{news}', 'HomeController@news');
Route::get('/contact', 'HomeController@contact');
Route::post('/contact', 'HomeController@contactInput');
Route::get('/placement', 'HomeController@placement');


