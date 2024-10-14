<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\Auth\LoginController@showLoginForm');

//Login Routes
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@loginUser');

//Logout Route
Route::get('/logout', 'App\Http\Controllers\LoginController@logoutUser');

//Registrations Routes
Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@registerUser');

//Shopping list Route for authorized user
Route::get('/shopping-list', 'App\Http\Controllers\ShoppingListController@showShoppingList');

//Product Add
Route::post('/product-add', 'App\Http\Controllers\ProductController@addProductToList');