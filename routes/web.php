<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

  Route::resource('/midterm', 'ContactController');

  Route::apiResource('/midterm', 'ContactController');

 Route::get('/midterm', 'ContactController@index');
 Route::get('/midterm/create','ContactController@create');
 Route::post('midterm','ContactController@store');
 Route::delete('/midterm/{midterm}','ContactController@destory');
 Route::GET('/midterm/{midterm}','ContactController@show');
  Route::GET('/midterm/{midterm}/edit','ContactController@edit');
  Route::PATCH ('/midterm/{midterm}','ContactController@update');
