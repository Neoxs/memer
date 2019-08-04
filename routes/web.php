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



Auth::routes(['verify' => true]);

route::post('follow/{user}', 'FollowsController@store')->middleware('verified');

Route::get('/', 'PostsController@index')->middleware('verified');

Route::get('/p/create', 'PostsController@create')->middleware('verified');

Route::post('/p', 'PostsController@store')->middleware('verified');

Route::get('/p/{post}', 'PostsController@show');

Route::get('/explore', 'PostsController@explore')->name('explore')->middleware('verified');



Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show')->middleware('verified');
Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile.edit')->middleware('verified');
Route::patch('/profile/{user}', 'ProfileController@update')->name('profile.update')->middleware('verified');
