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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts','PostsController@index')->name('post');
Route::get('/posts/create','PostsController@create')->name('post.create');
Route::post('/posts','PostsController@store')->name('post.store');
Route::get('/posts/{post}','PostsController@show')->name('post.show');
Route::get('/posts/{post}/edit','PostsController@edit')->name('post.edit');
Route::patch('/posts/{id}','PostsController@update')->name('post.update');

Route::get('post/{post}/delete', [
    'as'   => 'post.delete',
    'uses' => 'PostsController@destroy',
]);

