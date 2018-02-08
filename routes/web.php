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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('profile', 'UserController@profile')->middleware('auth');
Route::post('profile', 'UserController@update_avatar')->middleware('auth');
Route::get('quiz', 'UserController@quiz')->middleware('auth');
Route::get('check', 'UserController@check');

Route::get('/home', 'HomeController@index')->name('home');


//Facebook SocialLite

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
