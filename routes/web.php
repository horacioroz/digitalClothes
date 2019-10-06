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

Route::get('/home', function () {
    return view('home');
});
Route::get('/shpCrt', function(){

    return view('shoppingCart');
});
Route::get('/artic', function(){

    return view('art-view');
});
Route::get('/contact', function(){

    return view('form_contact');
});
Route::get('/profile', function(){

    return view('user_profile');
});
Route::get('/login', function(){

    return view('login');
});
Route::post('/login', function(){

    return view('login');
});

Route::get('/signup', function(){

    return view('auth/register');
});

Route::get('/art_list', function(){

    return view('art_list');
});
Route::get('/chpsw', function(){

    return view('changepassword');
});
Route::get('/chpswconf', function(){

    return view('changePasswordConfirm');
});
Route::get('/faq', function(){

    return view('faq');
});


Route::post('signup', [ 'as' => 'signup', 'uses' => 'RegisterController@signup']);
Route::post('signup', [ 'as' => 'signup', 'uses' => 'RegisterController@store']);




Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
