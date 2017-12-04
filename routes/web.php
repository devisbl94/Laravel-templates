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

Route::get('/', 'PagesController@home')->name('home');
Route::get('/courses', 'PagesController@courses')->name('courses');
Route::get('/teachers', 'PagesController@teachers')->name('teachers');
Route::get('/events', 'PagesController@events')->name('events');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/coursesingle', 'PagesController@coursesingle')->name('coursesingle');
Route::get('/gallery', 'PagesController@gallery')->name('gallery');
Route::get('/news', 'PagesController@news')->name('news');

Route::resource('message', 'MessagesController');
