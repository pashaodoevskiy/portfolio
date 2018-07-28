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
Route::get('post/add', 'PostController@add');
Route::post('post/add', 'PostController@store')->name('articleStore');

Route::get('/', function () {
    return view('pages/main');
});