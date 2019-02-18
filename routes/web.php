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

Route::get('foo', function () {
    return 'You are welcomed by Mr.NK';
});

Route::get('user', 'UserController@index')->name('userIndex');

Route::prefix('demo')->group(function () {
    Route::get('/', 'HomeController@getTitle')->name('demo');
    Route::get('about', 'AboutController@getTitle')->name('about');
    Route::get('contact', 'ContactController@getTitle')->name('contact');
});

