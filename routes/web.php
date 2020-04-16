<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

  Route::resource('user', 'UserController');

  Route::apiResource('user', 'UserController');

// Route::get('/user', 'UserController@index');
// Route::get('/user/create','UserController@create');
// Route::post('/user','UserController@store');
// Route::delete('/user/{user}','UserController@destory');
// Route::GET('/user/{user}','UserController@show');
//  Route::GET('/user/{user}/edit','UserController@edit');
//  Route::PATCH ('/user/{user}','UserController@update');