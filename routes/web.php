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
Route::get('/contact', 'UserController@contact')->name('contact');
Route::get('/footwear_industry', 'UserController@footwear_industry')->name('footwear_industry');
Route::get('/nylon_laces', 'UserController@nylon_laces')->name('nylon_laces');



Route::post('/admin_email', 'UserController@mail')->name('admin_email');



