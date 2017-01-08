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
   if (auth()->check()) {
       dd('Login Success!!');
   }

   else {
       dd('Login Failed!!');
   }
});

Route::get('login', 'Web\AuthController@getLogin');
Route::post('login', 'Web\AuthController@login');
Route::get('signup', 'Web\AuthController@getSignup');
Route::get('certification', 'Web\AuthController@getCertification');
Route::get('detail', 'Web\MainController@getDetail');
Route::get('location', 'Web\MainController@getLocation');
Route::post('location', 'Web\MainController@setLocation');

Route::get('home', function () {
   return redirect(url('/'));
});

Route::get('test', function () {
    return view('mobile.sitter_list');
});