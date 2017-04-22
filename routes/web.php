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

// Home Page
Route::get('/', 'AuthController@home');

Route::post('/', 'AuthController@postRegister');

// Todo Resources
Route::group(['middleware' => 'auth'], function() {

    Route::get('/register', 'UserController@home');
    Route::post('/register', 'UserController@postRegister');
    Route::get('/result', 'UserController@result');

});
