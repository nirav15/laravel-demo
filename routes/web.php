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

Route::get('user1', function () {
    return view('index', ["hello" => 'Hello World']);
});

Route::get('user', 'UserController@index')->name('userIndex');

// Route::get('blade', function () {
//     return view('child');
// });