<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller as BaseController;


class RegisterController extends BaseController
{
    public function showRegistrationForm(){

        return view('auth.register');
    }

    public function registerUser(Request $request) {

        //Validation Rules
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
    
        //Create new user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('message', 'Registration successful! Please log in.');
    }
}