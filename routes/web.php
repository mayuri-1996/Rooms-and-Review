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

    // Propery Section
    Route::get('/all/property','Admin\AdminController@allProperty')->name('admin.all.property')->middleware('auth:admin');
    Route::get('/add/property','Admin\AdminController@addProperty')->name('admin.add.property')->middleware('auth:admin');
    Route::post('/add/property','Admin\AdminController@postProperty')->name('admin.post.property')->middleware('auth:admin');
    Route::get('/property/details/{id}','Admin\AdminController@propertyDetails')->name('admin.details.property')->middleware('auth:admin');

    // Property Type
    Route::get('/all/property/type','Admin\AdminController@allPropertyType')->name('admin.all.propertytype')->middleware('auth:admin');
    Route::get('/add/property/type','Admin\AdminController@addPropertyType')->name('admin.add.propertytype')->middleware('auth:admin');
    Route::post('/add/property/type','Admin\AdminController@postPropertyType')->name('admin.post.propertytype')->middleware('auth:admin');

    // Other feachure Section
    Route::get('/all/other-feachures','Admin\AdminController@allOtherFeachures')->name('admin.all.otherfeachure')->middleware('auth:admin');
    Route::get('/add/other-feachures','Admin\AdminController@addOtherFeachures')->name('admin.add.otherfeachure')->middleware('auth:admin');
    Route::post('/post/other-feachures','Admin\AdminController@postOtherFeachures')->name('admin.post.otherfeachure')->middleware('auth:admin');


    Route::get('/all/post-property/request','Admin\AdminController@allPostPropertyRequest')->name('admin.all.post_property')->middleware('auth:admin');

    Route::get('/all/apply/for-rent','Admin\AdminController@allApplyForRent')->name('admin.all.apply_for_rent')->middleware('auth:admin');

    Route::get('/get/states','Admin\AdminController@getStates')->name('admin.get.states');
    Route::get('/get/cities','Admin\AdminController@getCities')->name('admin.get.cities');
    Route::get('/get/user','Admin\AdminController@getUser')->name('admin.get.user')->middleware('auth:admin');

});
Route::get('contact','PageController@contact')->name('pages.contact');
Route::get('about','PageController@about')->name('pages.about');

Route::get('addproperty','PageController@addproperty')->name('pages.addproperty')->middleware('auth');
Route::post('post/addproperty','PageController@postAddProperty')->name('pages.post.addproperty')->middleware('auth');


Route::get('myproperty','PageController@myproperty')->name('pages.myproperty');
Route::get('dashboard','PageController@dashboard')->name('pages.dashboard');

Route::get('propertydetails/{id}','PageController@propertydetails')->name('pages.propertydetails');
Route::post('applyForRent','PageController@applyForRent')->name('pages.applyForRent');

Route::get('propertylisting','PageController@propertylisting')->name('pages.propertylisting');

Route::get('myprofile','PageController@myprofile')->name('pages.myprofile')->middleware('auth');
Route::get('changepassword','PageController@changepassword')->name('pages.changepassword');
Route::get('bookmarklisting','PageController@bookmarklisting')->name('pages.bookmarklisting');
Route::get('blog','PageController@blog')->name('pages.blog');

Route::get('User-Register','PageController@register')->name('pages.signin');
Route::post('post/register', 'Auth\Frontend\RegisterController@store')->name('buyer.register.store');

Route::get('User-Login','PageController@login')->name('pages.signup');
Route::post('post/login', 'Auth\Frontend\LoginController@loginBuyer')->name('buyer.auth.login');
Route::post('buyer/logout', 'Auth\Frontend\LoginController@logout')->name('buyer.auth.logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
