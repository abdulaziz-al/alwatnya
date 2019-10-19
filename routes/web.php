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
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]
], function()
{
    // -- home controller --
// home / guest view
Route::get('/','HomeController@index');
// registration page
Route::get('/registration','HomeController@registration');
// login
Route::get('/login', 'HomeController@login');
// check status
Route::get('/checkstatus', 'HomeController@checkstatus');
// contact us
Route::get('/contact-us', 'HomeController@contactus');
// -- end of home controller functionality --


// -- admin controller --
// admin dashboard
Route::get('/admin', 'AdminController@index');

// 1 admin/settings/ sub-admins page
Route::get('/admin/settings/subadmins', 'AdminController@subadmins');
// 2 admin/settings/subadmins/ create a new sub-admin page
Route::get('/admin/settings/subadmins/new', 'AdminController@newSubAdmin');
// 3 admin/settings/subadmins/ view subadmin page
Route::get('/admin/settings/subadmins/viewsubadmin{id}', 'AdminController@viewsubadmin');
// 4 admin/settings/password page 
Route::get('/admin/settings/password', 'AdminController@password');
Route::post('/admin/settings/password', 'AdminController@updatePasswordAdmin')->name('updatePasswordAdmin');

// admin quick links:
// 1 admin/create new user page
Route::get('/admin/createuser', 'AdminController@newuser');
Route::post('/admin/createuser', 'AdminController@createUser')->name('createUser');

// 2 admin/neworders page
Route::get('/admin/neworders', 'AdminController@newOrders');
// 3 admin/completedorders page
Route::get('/admin/completedorders', 'AdminController@completedOrders');
// 4 admin/returnedorders page
Route::get('/admin/returnedorders', 'AdminController@returnedOrders');
// 5 admin/vieworder page
Route::get('/admin/vieworder{id}', 'AdminController@viewOrder');
Route::post('/admin/vieworderC{id}', 'AdminController@OrderCompleted');
Route::post('/admin/vieworder{id}', 'AdminController@OrderReject')->name('OrderReject');

Route::get('/admin/viewCr', 'AdminController@viewCr');
Route::post('/admin/viewCrAccpte{id}', 'AdminController@activeCr')->name('activeCr');
Route::post('/admin/viewCr', 'AdminController@DiableCr')->name('DiableCr');


// 6 admin/search page
Route::get('/admin/search', 'AdminController@search');
Route::post('/admin/search', 'AdminController@Reseltsearch')->name('Reseltsearch');

// admin logout
Route::get('/admin/logout', 'AdminController@logout');
// -- end of admin controller functionality --


// -- user controller --
// user dashboard
Route::get('/user', 'UserController@index');
Route::get('/user/post','UserController@PostRequest');
Route::get('/user/createCR', 'UserController@showCRcreate');
Route::post('/user/createCR', 'UserController@CreateCR')->name('CreateCR');

Route::get('/createOrder{number}', 'UserController@showCreatePage');
Route::post('/createOrder', 'UserController@createOrder')->name('createOrder');

// 1 user/settings/info page
Route::get('/user/settings/info', 'UserController@viewInfoPage');
// 2 user/settings/info/edit page
Route::get('/user/settings/info/edit', 'UserController@viewEditPage');
// 3 user/settings/password page
Route::get('/user/settings/password', 'UserController@password');
Route::post('/user/settings/password', 'UserController@updatePassword')->name('updatePassword');
// 4 user/settings/crs page
Route::get('/user/settings/crs', 'UserController@viewCRs');
// 5 user/settings/crs/edit page
Route::get('/user/settings/crs/edit{id}', 'UserController@crEditView');

Route::get('/user/returnedorders', 'UserController@returnedOrders');
Route::get('/user/wittingorder', 'UserController@wittingOrder');
Route::get('/user/complateorder', 'UserController@complateOrder');

Route::get('/user/viewOrder{id}', 'UserController@viewOrder');
Route::get('/user/showOrder{id}', 'UserController@showOrder');

Route::post('/user/viewOrder{id}', 'UserController@ResentOrder')->name('ResentOrder');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


});