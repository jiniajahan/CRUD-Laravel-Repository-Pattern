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


Route::get('/posts/create','PostsController@create')->name('post.create');
Route::post('/posts','PostsController@store')->name('post.store');


Route::patch('/posts/{id}','PostsController@update')->name('post.update');

Route::get('post/{post}/delete', [
    'as'   => 'post.delete',
    'uses' => 'PostsController@destroy',
]);

Route::get('post/{post}/edit', [
    'as'   => 'post.edit',
    'uses' => 'PostsController@edit',
]);

Route::get('posts/{post}', [
    'as'   => 'post.show',
    'uses' => 'PostsController@show',
]);
Route::get('posts', [
    'as'   => 'post.index',
    'uses' => 'PostsController@index',
]);


Route::get('upload',[
    'as' => 'file.upload',
    'uses' =>'UploadController@index'
]);

Route::post('upload/store',[
    'as' => 'file.store',
    'uses' =>'UploadController@store'
]);
