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

Route::get('/home', function () {return view('home');});
Route::get('/admin', function () {return view('admin');});
Route::get('/shpCrt', function(){return view('shoppingCart');});
Route::get('/artic', function(){return view('art-view');});
//Route::get('/profile', function(){return view('user_profile');});;
//Route::get('/users_list', function(){return view('users_list');});
Route::get('/login', function(){return view('login');});
Route::post('/login', function(){return view('login');});
Route::get('/signup', function(){return view('auth/register');});
Route::get('/art_list', function(){return view('art_list');});
Route::get('/chpsw', function(){return view('changepassword');});
Route::get('/chpswconf', function(){return view('changePasswordConfirm');});
Route::get('/faq', function(){return view('faq');});
Route::get('/category_create', function(){return view('category_create');});

Auth::routes();

Route::post('logout', 'UserController@logout')->name('logout');
Route::post('/signup', [ 'as' => 'signup', 'uses' => 'Auth\RegisterController@signup']);
Route::post('signup', [ 'as' => 'signup', 'uses' => 'Auth\RegisterController@store']);
Route::get('/users_list', [ 'as' => 'users_list', 'uses' => 'UserController@index']);
Route::get('user_profile/{id}',['as' => 'profile', 'uses' => 'UserController@userProfile']);
Route::get('user_profile_edit/{id}','UserController@userEdit')->name('profile_edit');
Route::put("user_profile_edit/{id}",'UserController@userUpdate')->name('profile_update');
Route::get('/product_list', [ 'as' => 'product_list', 'uses' => 'ProductController@index']);
Route::get('product_destroy/{id}', 'CategoryController@destroy')->name('category_destroy');
Route::get('product_active/{id}', 'CategoryController@active')->name('category_active');
Route::get("product_edit/{id}",'CategoryController@edit')->name('category_edit');
Route::put("product_edit/{id}",'CategoryController@update')->name('category_update');
Route::get('/category_list', [ 'as' => 'category_list', 'uses' => 'CategoryController@index']);
Route::get('category_destroy/{id}', 'CategoryController@destroy')->name('category_destroy');
Route::get('category_active/{id}', 'CategoryController@active')->name('category_active');
Route::get("category_edit/{id}",'CategoryController@edit')->name('category_edit');
Route::put("category_edit/{id}",'CategoryController@update')->name('category_update');
//Route::get("category_edit/{id}",[ 'as' => 'category_edit', 'uses' => 'CategoryController@edit']);
Route::post("category_create",'CategoryController@create')->name('category_create');


//Route::get('/home', 'HomeController@index')->name('/home');
