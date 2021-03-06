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
});

Route::get('login', 'Web\AuthController@getLogin');
Route::post('login', 'Web\AuthController@login');
Route::get('signup', 'Web\AuthController@getSignup');
Route::post('signup', 'Web\AuthController@signup');
Route::get('certification', 'Web\AuthController@getCertification');
Route::get('detail', 'Web\MainController@getDetail');
Route::get('location', 'Web\MainController@getLocation');
Route::post('location', 'Web\MainController@setLocation');

Route::get('home', function () {
   return redirect('/');
});

Route::group(['prefix' => 'about'], function() {

    Route::get('info', function (){return view('desktop.info');});
    Route::get('main', function (){return view('desktop.main');});
    Route::get('team', function (){return view('desktop.team');});
    Route::group(['prefix' => 'use'], function (){
        Route::get('/', function () {
           return view('desktop.use');
        });

        Route::get('apply', function () {return view('desktop.contracts.apply');});
        Route::get('cost', function () {return view('desktop.contracts.cost');});
        Route::get('form', function () {return view('desktop.contracts.form');});
        Route::get('health', function () {return view('desktop.contracts.health');});
        Route::get('interview', function () {return view('desktop.contracts.interview');});
        Route::get('workscope', function () {return view('desktop.contracts.workscope');});

    });
});


Route::get('test', function () {
    return view('mobile.detail');
});