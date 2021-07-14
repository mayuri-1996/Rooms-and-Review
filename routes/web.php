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

// Route::get('/', function () {
//     return view('pages.index');
// });

Route::get('/','PageController@index')->name('pages.index');
Route::get('contact','PageController@contact')->name('pages.contact');
Route::get('about','PageController@about')->name('pages.about');
Route::get('addproperty','PageController@addproperty')->name('pages.addproperty');
Route::get('myproperty','PageController@myproperty')->name('pages.myproperty');
Route::get('dashboard','PageController@dashboard')->name('pages.dashboard');
Route::get('propertydetails','PageController@propertydetails')->name('pages.propertydetails');
Route::get('propertylisting','PageController@propertylisting')->name('pages.propertylisting');
Route::get('myprofile','PageController@myprofile')->name('pages.myprofile');
Route::get('changepassword','PageController@changepassword')->name('pages.changepassword');
Route::get('bookmarklisting','PageController@bookmarklisting')->name('pages.bookmarklisting');
Route::get('blog','PageController@blog')->name('pages.blog');
Route::get('signin','PageController@signin')->name('pages.signin');
Route::get('signup','PageController@signup')->name('pages.signup');