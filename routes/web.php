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
Route::get('/login', function(){return view('login');});
Route::post('/login', function(){return view('login');});
Route::get('/signup', function(){return view('auth/register');});
//Route::get('/profile', function(){return view('user_profile');});;
//Route::get('/users_list', function(){return view('users_list');});
Route::get('/art_list', function(){return view('art_list');});
Route::get('/chpsw', function(){return view('changepassword');});
Route::get('/chpswconf', function(){return view('changePasswordConfirm');});
Route::get('/faq', function(){return view('faq');});

Auth::routes();
//User Routes

Route::post('logout', 'UserController@logout')->name('logout');
Route::post('/signup', [ 'as' => 'signup', 'uses' => 'Auth\RegisterController@signup']);
Route::post('signup', [ 'as' => 'signup', 'uses' => 'Auth\RegisterController@store']);
Route::get('/users_list', [ 'as' => 'users_list', 'uses' => 'UserController@index']);
Route::get('user_profile/{id}',['as' => 'profile', 'uses' => 'UserController@userProfile']);
Route::get('user_profile_edit/{id}','UserController@userEdit')->name('profile_edit');
Route::put("user_profile_edit/{id}",'UserController@userUpdate')->name('profile_update');
//Product Routes
Route::get('/product_list', [ 'as' => 'product_list', 'uses' => 'ProductController@index']);
Route::post("product_create",'ProductController@create')->name('product_create');
Route::get("product_edit/{id}",'ProductController@edit')->name('product_edit');
Route::put("product_edit/{id}",'ProductController@update')->name('product_update');
Route::get('product_active/{id}', 'ProductController@active')->name('product_active');
Route::get('product_destroy/{id}', 'ProductController@destroy')->name('product_destroy');
//Category Routes
Route::get('/category_list', [ 'as' => 'category_list', 'uses' => 'CategoryController@index']);
Route::get('/category_create', function(){return view('category_create');});
Route::post("category_create",'CategoryController@create')->name('category_create');
Route::get("category_edit/{id}",'CategoryController@edit')->name('category_edit');
Route::put("category_edit/{id}",'CategoryController@update')->name('category_update');
Route::get('category_active/{id}', 'CategoryController@active')->name('category_active');
Route::get('category_destroy/{id}', 'CategoryController@destroy')->name('category_destroy');
//Route::get("category_edit/{id}",[ 'as' => 'category_edit', 'uses' => 'CategoryController@edit']);
//color Routes
Route::get('/color_list', [ 'as' => 'color_list', 'uses' => 'ColorController@index']);
Route::get('/color_create', function(){return view('color_create');});
Route::post("color_create",'ColorController@create')->name('color_create');
Route::get("color_edit/{id}",'ColorController@edit')->name('color_edit');
Route::put("color_edit/{id}",'ColorController@update')->name('color_update');
Route::get('color_active/{id}', 'ColorController@active')->name('color_active');
Route::get('color_destroy/{id}', 'ColorController@destroy')->name('color_destroy');
//size Routes
Route::get('/size_list', [ 'as' => 'size_list', 'uses' => 'SizeController@index']);
Route::get('/size_create', function(){return view('size_create');});
Route::post("size_create",'SizeController@create')->name('size_create');
Route::get("size_edit/{id}",'SizeController@edit')->name('size_edit');
Route::put("size_edit/{id}",'SizeController@update')->name('size_update');
Route::get('size_active/{id}', 'SizeController@active')->name('size_active');
Route::get('size_destroy/{id}', 'SizeController@destroy')->name('size_destroy');


//Route::get('/home', 'HomeController@index')->name('/home');
