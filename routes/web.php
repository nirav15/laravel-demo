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

Route::get('user', 'UserController@index')->name('userIndex');

Route::prefix('demo')->group(function () {
    Route::get('/', 'HomeController@home')->name('demo');
    Route::get('about', 'AboutController@about')->name('about');
    Route::get('category', 'CategoryController@category')->name('category');
    Route::post('category', 'CategoryController@categoryPost')->name('datatable');
    Route::get('category/delete', 'CategoryController@deleteData')->name('delete');
    Route::get('category/edit', 'CategoryController@editData')->name('edit');
    Route::get('category_y', 'CategoryYajraController@index');
    Route::get('category_y/getdata', 'CategoryYajraController@getData')->name('getdata');
    Route::get('contact', 'ContactController@contact')->name('contact');
    Route::post('contact', 'ContactController@saveContact')->name('contactValidation');
});




