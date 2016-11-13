<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'Web\MainController@getLogin');
Route::get('signup', 'Web\MainController@getSignup');
Route::get('certification', 'Web\MainController@getCertification');
Route::get('detail', 'Web\MainController@getDetail');
Route::get('location', 'Web\MainController@getLocation');


Route::get('test', function () {

    return view('mobile.index');
});