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


Route::get('/welcome', 'UserController@index')->name('welcome');
Route::get('/blog', 'UserController@blog')->name('blog');
Route::get('/basic_profile', 'UserController@basic_profile')->name('basic_profile');
Route::get('/key_man', 'UserController@key_man')->name('key_man');




