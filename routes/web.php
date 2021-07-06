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


Route::resource('users', 'UserController');
Route::resource('posts', 'PostController');
Route::resource('comments', 'CommentController');

Route::post('save-likedislike','PostController@save_likedislike');
