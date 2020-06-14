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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', 'AdminController@adminHome')->name('admin.home')->middleware('is_admin');

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/courses', 'HomeController@courses');
Route::get('/courses/{course}', 'HomeController@course')->name('course');
Route::get('/gallery', 'HomeController@galleryHome');
Route::get('/gallery/{gallery}', 'HomeController@gallery')->name('gallery');
Route::get('/news/', 'HomeController@newsHome');
Route::get('/contact', 'HomeController@contact');
Route::post('/contact', 'HomeController@contactInput');


