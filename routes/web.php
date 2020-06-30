<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

Route::get('/', 'HomeController@home');
Route::get('/register', 'AuthController@register')->name('register');
Route::post('/welcome', 'AuthController@welcome')->name('welcome');
