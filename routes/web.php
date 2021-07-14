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

Route::get('admin', function () {
    return view('admin-panel.auth.login');
});

Route::get('/','PageController@index')->name('pages.index');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', 'Auth\Admin\AdminController@dashBoard')->name('admin.dashboard');
    Route::get('index', 'Auth\Admin\AdminController@dashBoard')->name('admin.dashboard');

    Route::get('register', 'Auth\Admin\AdminController@create')->name('admin.register');
    Route::post('post/register', 'Auth\Admin\AdminController@store')->name('admin.register.store');
    Route::get('login', 'Auth\Admin\LoginController@login')->name('admin.auth.login');
    Route::post('login', 'Auth\Admin\LoginController@loginAdmin')->name('admin.auth.loginAdmin');
    Route::post('logout', 'Auth\Admin\LoginController@logout')->name('admin.auth.logout');



    Route::get('/all/admin','Admin\AdminController@allAdmin')->name('admin.all.admin')->middleware('auth:admin');

    Route::get('/all/buyer-owner','Admin\AdminController@allBuyerOrOwner')->name('admin.all.buyerOwner')->middleware('auth:admin');
    Route::get('/user/details','Admin\AdminController@userProfile')->name('admin.user.profile')->middleware('auth:admin');
});
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
