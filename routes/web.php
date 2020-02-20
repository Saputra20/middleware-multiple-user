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

Route::group(['prefix' => 'admin' , 'middleware' => ['auth' , 'admin'] ], function () {
    Route::get('/', function(){
        return "This is admin panel";
    })->name('home');
});

Route::group(['prefix' => 'user' , 'middleware' => ['auth' , 'user'] ], function () {
    Route::get('/', function(){
        return "This is user panel";
    })->name('home');
});