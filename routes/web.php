<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\LoginController@showLoginForm');

Route::get('/login', 'App\Http\Controllers\LoginController@showLoginForm');
Route::post('/login', 'App\Http\Controllers\LoginController@loginUser');

Route::get('/logout', 'App\Http\Controllers\LoginController@logoutUser');


Route::get('/register', 'App\Http\Controllers\RegisterController@showRegistrationForm');
Route::post('/register', 'App\Http\Controllers\RegisterController@registerUser');

Route::get('/shopping-list', 'App\Http\Controllers\ShoppingListController@showShoppingList');