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

//Route::get('/', function () {
//    return view('pages.carts.index');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


//############# Carts ###################
Route::get('/carts','CartsController@index');
Route::post('/cust_search','CartsController@search');
Route::get('/cust_detail/{id}','CartsController@cust_detail');
Route::get('/carts/product/{id}','CartsController@select_product');
Route::post('/carts/invoice','CartsController@invoice');


//############# Customers ##################
Route::get('/customers','CustomerController@index');

//############# products ###################
Route::get('/products', 'ProductController@index');
Route::get('/products/expired', 'ProductController@expired');

//############# Promotions ###################
Route::get('/promotions', 'PromotionController@index');


//############# Users ###################
Route::get('/users', 'UserController@index');
Route::post('/users/add', 'UserController@add_user');
Route::view('/permission', 'pages/users/permission');


//############# Tasks ###################
Route::get('/tasks', 'TasksController@index');
Route::get('/calender', 'TasksController@calender');

//############# Campaigns ###################
Route::get('/campaign', 'CampaignController@index');
Route::get('/campaign/group', 'CampaignController@upgroup');
Route::get('/campaign/pomotion', 'CampaignController@uppomotion');

