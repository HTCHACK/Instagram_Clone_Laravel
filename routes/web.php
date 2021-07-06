<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();

Route::get('/','WelocomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/userview','UserController@show')->name('users.show');
Route::get('/postshow','PostController@show')->name('posts.show');
Route::get('like/{id}','PostController@like')->name('likes.post');
Route::get('follow/{id}','UserController@follow')->name('users.follow');
Route::get('unfollow/{id}','UserController@unfollow')->name('users.unfollow');


Route::resource('users', 'UserController');
Route::resource('posts', 'PostController');
Route::resource('comments', 'CommentController');


