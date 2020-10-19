<?php

use Illuminate\Support\Facades\Route;



Route::get('/interstellar', '\App\Http\Controllers\PageController@getInterstellar');
Route::get('/inception', '\App\Http\Controllers\PageController@getInception');
Route::get('/firstman', '\App\Http\Controllers\PageController@getFirstMan');