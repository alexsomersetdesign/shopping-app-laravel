<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class LoginController extends BaseController {
 
	public function showLoginForm(){
	    return view('/login');
	}
	 
	public function loginUser(Request $request) {
	    $credentials = $request->only('email', 'password');
	 
	    if (Auth::attempt($credentials)) {
	        return redirect()->intended('/shopping-list');
	    }
	 
	    return redirect('/login')->with('message', 'Invalid credentials. Please try again.');
	}

	public function logoutUser(Request $request) {

		Auth::logout();
		return redirect('/login')->with('message', 'You were successfully logged out');
	}
}