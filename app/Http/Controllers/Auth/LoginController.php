<?php

namespace App\Http\Controllers\Auth;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class LoginController extends BaseController {
 
	public function showLoginForm(){

	    return view('auth.login');
	}

	 
	public function loginUser(Request $request) {
		
		//Get credentials
	    $credentials = $request->only('email', 'password');
	 	
	 	//Authorize with credentials and direct user to shopping list
	    if (Auth::attempt($credentials)) {
	        return redirect()->intended('/shopping-list');
	    }
	 	
	 	//Send user back to login with error message
	    return redirect('/login')->with('message', 'Invalid credentials. Please try again.');
	}

	public function logoutUser(Request $request) {

		Auth::logout();

		return redirect('/login')->with('message', 'You were successfully logged out');
	}
}