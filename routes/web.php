<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\LoginController@showLoginForm');

//Login Routes
Route::get('/login', 'App\Http\Controllers\LoginController@showLoginForm');
Route::post('/login', 'App\Http\Controllers\LoginController@loginUser');

//Logout Route
Route::get('/logout', 'App\Http\Controllers\LoginController@logoutUser');

//Registrations Routes
Route::get('/register', 'App\Http\Controllers\RegisterController@showRegistrationForm');
Route::post('/register', 'App\Http\Controllers\RegisterController@registerUser');

//Shopping lisr Route for authorized user
Route::get('/shopping-list', 'App\Http\Controllers\ShoppingListController@showShoppingList');