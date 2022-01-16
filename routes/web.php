<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@home');
Route::get('/home', 'Home2Controller@home');
